<?php

include 'includes/session.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $_POST = json_decode(file_get_contents('php://input'), true);
    
    if (isset($_POST['action']) && $_POST['action'] == 'signup') {

        // Retrieve form data
        $firstname = test_input($_POST['firstname']);
        $lastname = test_input($_POST['lastname']);
        $username = test_input($_POST['username']);
        $email = test_input($_POST['email']);
        $password = test_input($_POST['password']);
        $error = [];
        $protocol = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
        $host = $_SERVER['SERVER_NAME'];
        $port = $_SERVER['SERVER_PORT'];

        // Check for non-standard ports and include them in the URL
        if (($protocol === 'http' && $port != 80) || ($protocol === 'https' && $port != 443)) {
            $url = $protocol . '://' . $host . ':' . $port;
        } else {
            $url = $protocol . '://' . $host;
        }

        $data = [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'username' => $username,
            'email' => $email,
            'password' => $password,
        ];
    
        // First name requirements
        if (empty($firstname)) {
            $error['last_name'] = 'First Name is required';
        }
        if (!preg_match("/^[a-zA-Z']*$/", $firstname)) {
            $error['last_name'] = 'First Name must be letters only';
        }
        if (strlen($firstname) > 20 || strlen($firstname) < 3) {
            $error['first_name'] = 'First Name must be between 3 to 20 characters';
        }
    
        // Last name requirements
         if (empty($lastname)) {
            $error['last_name'] = 'Last Name is required';
        }
        if (!preg_match("/^[a-zA-Z']*$/", $lastname)) {
            $error['last_name'] = 'Last Name must be letters only';
        }
        if (strlen($lastname) > 20 || strlen($lastname) < 3) {
            $error['last_name'] = 'Last Name must be between 3 to 20 characters';
        }
        
    
            // Username requirements
         if (empty($username)) {
            $error['user_name'] = ' User Name is required';
        }
        if (!preg_match("/^[a-zA-Z0-9_@-]{3,20}$/", $username)) {
            $error['user_name'] = 'User Name consist of letter, number and other characters ';
        }
        if (strlen($username) > 20 || strlen($username) < 3) {
            $error['user_name'] = 'userUser Name must be between 3 to 20 characters';
        }
    
        // Email requirements
        if (empty($email)) {
            $error['email'] = 'Email is required';
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error['email'] = 'Email is invalid';
        }
        if (strlen($email) > 150 || strlen($email) < 5) {
            $error['email'] = 'Email must be between 5 to 150 characters';
        }

        // Password requirements
        if (empty($password)) {
            $error['password'] = 'Password is required';
        }
        if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,24}$/', $password)) {
            $error['password'] = 'Passwords must contain at least one uppercase, lowercase, number, and characters';
        }
        if (strlen($password) > 30 || strlen($password) < 6) {
            $error['password'] = 'Invalid Password';
        }

        $conn = $pdo->open();
        $stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM users WHERE email=:email");
        $stmt->execute(['email'=>$email]);
        $row = $stmt->fetch();

        if($row['numrows'] > 0){
            $error['email'] = 'Email already taken';
        }

        if (empty($error['email'])) {
            $stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM users WHERE username=:username");
			$stmt->execute(['username'=>$username]);
			$row = $stmt->fetch();
            if($row['numrows'] > 0){
				$error['username'] = 'Username already taken';
			}
        }

        if (count($error) === 0) {

            $password = password_hash($password, PASSWORD_DEFAULT);

            //generate code
            $set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $code=substr(str_shuffle($set), 0, 12);
            $now = date('Y-m-d');

            try {
                $stmt = $conn->prepare(
                    "INSERT INTO users (email, password, firstname, lastname, username, activate_code, created_on) 
                    VALUES (:email, :password, :firstname, :lastname, :username, :code, :now)"
                );
                $stmt->execute([
                    'email'=>$email,
                    'password'=>$password,
                    'firstname'=>$firstname,
                    'lastname'=>$lastname,
                    'username'=>$username,
                    'code'=>$code,
                    'now'=>$now
                ]);
                $userid = $conn->lastInsertId();

                $message = "
                    <h2>Thank you for Registering.</h2>
                    <p>Your Account:</p>
                    <p>Email: ".$email."</p>
                    <p>Please click the link below to activate your account.</p>
                    <a href='$url/activate.php?code=".$code."&user=".$userid."'>Activate Account</a>
                ";

                $subject = 'Welcome to Coffee Borcelle';
                echo json_encode([
                    'success' => true,
                    'message' => "Registeration successful"
                ]);
                mail_sender($email, $subject,$message);
                return;

            } catch (\Throwable $th) {
                //throw $th;
            }
        } else {
            echo json_encode([
                'success' => false,
                'count' => count($error),
                'errors' => $error
            ]);
            return;
        }
    }
}


// Check if the form is submitted

if(isset($_POST['activation'])) {
    $email = test_input($_POST['email']);
    $_SESSION['email'] = $email;

    if(empty($email)){
        $_SESSION['error'] = 'Email is required';
        header('location: email_activation.php');
        exit();
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['error'] = 'Invalid email format';
        header('location: email_activation.php');
        exit();
    }

    $conn = $pdo->open();

    $stmt = $conn->prepare("SELECT id, COUNT(*) AS numrows FROM users WHERE email=:email");
    $stmt->execute(['email'=>$email]);
    $row = $stmt->fetch();

    if($row['numrows'] > 0){
        $set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code=substr(str_shuffle($set), 0, 12);

        try{
            $stmt = $conn->prepare(
                "UPDATE users set activate_code = :code WHERE email = :email"
            );
            $stmt->execute([
                'email'=>$email, 
                'code'=>$code
            ]);
            $userid = $row['id'];

            $message = "
                <h2>Activate Your Account.</h2>
                <p>Your Account:</p>
                <p>Email: ".$email."</p>
                <p>Please click the link below to activate your Coffee Borcelle account.</p>
                <a href='http://localhost/ecommerce/activate.php?code=".$code."&user=".$userid."'>Activate Account</a>
            ";

            $subject = 'Activate Your Account on Coffee Borcelle';
            $sessionVariables = array('email');
            $success = 'Check your email to activate.';
            $error = 'Message could not be sent. Mailer Error: ';
            $redirect_success = 'email_activation.php';
                
            mail_sender($email, $subject, 
            $message, $sessionVariables, 
            $success, $error, $redirect_success,
            $redirect_success);


        } catch(PDOException $e){ 
            $_SESSION['error'] = $e->getMessage();
            header('location: email_activation.php');
        }

        $pdo->close();
    } else {
        $_SESSION['error'] = 'email is either wrong or invalid ';
        header('location: email_activation.php');
    }
    
}



?>