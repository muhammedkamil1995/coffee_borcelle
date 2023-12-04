<?php include 'includes/session.php'; ?>


<link rel="stylesheet" href="core/login.css">

<body>

    <div class="container">
        <div class="login">

            <?php
                if(isset($_SESSION['error'])){
                    echo "
                    <div class='callout callout-danger text-center'>
                        <p>".$_SESSION['error']."</p> 
                    </div>
                    ";
                    unset($_SESSION['error']);
                }
                if(isset($_SESSION['success'])){
                    echo "
                    <div class='callout callout-success text-center'>
                        <p>".$_SESSION['success']."</p> 
                    </div>
                    ";
                    unset($_SESSION['success']);
                }
             
            ?>

            <h1>Log in</h1>
            <form action="login.php" method="post">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password"><br>
                <input type="checkbox" name="remember"><span>Remember me</span>
                <a href="password_forgot.php">Forgot password?</a>
                <button name="login">Log in</button>
            </form>
            <hr>
            <p>Or Connect With</p>
            <hr>
            <ul>
                <li><i class="fab fa-facebook-f fa-2x"></i></li>
                <li><i class="fab fa-twitter fa-2x"></i></li>
                <li><i class="fab fa-github fa-2x"></i></li>
                <li><i class="fab fa-linkedin-in fa-2x"></i></li>
            </ul>
            <div class="clearfix"></div>
            <span class="copyright">&copy; 2023</span>
        </div>
        <div class="register">
            <i class="fas fa-user-plus fa-5x"></i>
            <h2>If you don't have an account!</h2>
            <p>Enter your personal details and start your journey with Chocolate Coffee</p>
            <a href="register.php"><button>Register <i class="fas fa-arrow-circle-right"></i></button></a>
            <a href="index.php"><button>Home <i class="fas fa-arrow-circle-right"></i></button></a>
        </div>
    </div>
</body>

</html>