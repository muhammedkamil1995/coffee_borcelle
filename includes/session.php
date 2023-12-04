<?php
	include 'includes/conn.php';
	session_start();

	if(isset($_SESSION['admin'])){
		header('location: admin/home.php');
	}

	// unset($_SESSION['user']);

	if(isset($_SESSION['user'])){
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("SELECT * FROM users WHERE id=:id");
			$stmt->execute(['id'=>$_SESSION['user']]);
			$user = $stmt->fetch();
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

		$pdo->close();
	}


	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	function mail_sender(
		$email, $subject, $message
	) {
		require_once  __DIR__ .'/../vendor/autoload.php';
		
		$mail = new PHPMailer(true); 
		$user_email = 'kamzycoded@gmail.com';

		try {
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = $user_email;
			$mail->Password = 'vqrpuldbikmeyrfu';
			$mail->SMTPOptions = array(
				'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
				)
			);

			$mail->SMTPSecure = 'ssl';
			$mail->Port = 465;

			$mail->setFrom($user_email);

			$mail->addAddress($email);
			$mail->addReplyTo($user_email);

			//Content
			$mail->isHTML(true);
			$mail->Subject = $subject;
			$mail->Body    = $message;

			$mail->send();
		} catch (\Throwable $th) {
			echo $mail->ErrorInfo;
		}
	}

?>