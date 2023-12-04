<!DOCTYPE html>
<html>

<head>

    <!-- Tell the browser to be responsive to screen width -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


    <link rel="stylesheet" href="core/had.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/styles.css">



    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- Paypal Express -->
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>

    <script src="https://www.google.com/recaptcha/api.js"></script>
    <!-- Custom CSS -->

    <style>
    /* Your CSS styles here */

    /* Styles for the header and navigation */

    header {
        background-attachment: fixed;
        display: flex;


        /* Adjust the top padding as needed */
    }

    nav {
        padding: 15px 35px 10px;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-top: 40px;
        /* Align items to the start */
    }


    nav h2 {
        flex: 1;
        font-family: 'Overpass Mono', monospace;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin: 0;
        align-self: flex-start;
        margin-left: -70px;
        margin-top: -40px;

    }

    .menu a.button {
        display: inline-block;
        padding: 8px 16px;
        /* Adjust padding for a smaller size */
        background-color: #8B4513;
        /* Chocolate color */
        color: #FFFFFF;
        text-decoration: none;
        font-size: 12px;
        /* Adjust font size for a smaller size */
        font-weight: 100;
        letter-spacing: 1px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .menu a.button:hover {
        background-color: #654321;
        /* Darker chocolate color on hover */
    }




    .menu ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;

    }

    .menu ul li {
        margin: 0 10px;
        text-transform: uppercase;
    }

    .menu ul li a {
        text-decoration: none;
        color: white;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 1px;
    }


    .container {
        text-align: center;
        padding: 20px;
    }

    .container h1 {
        font-size: 40px;
        font-family: Pompiere;
    }

    .container p {
        font-size: 18px;
        font-family: Galada;
        font-weight: 100;
        letter-spacing: 0.72px;
        word-wrap: break-word
    }

    .full-width-height {
        width: 100%;
        height: 100%;
        color: rgba(255, 255, 255, 0.80);
        font-size: 128px;
        font-family: Pompiere;
        font-weight: 400;
        word-wrap: break-word;
    }
    </style>
</head>

<body>
    <header>
        <nav>
            <h2><a href="index.php" id="logo"><img style="width: 50%; height: 50%" src="imag/Borcelle1.png"
                        alt="Coffee Borcelle Logo"></a></h2>

            <div class="menu">
                <ul>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="reservations.php">Reservations</a></li>
                    <li><a href="shop.php">shop</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="login.php" class="button">Login</a></li>
                    <li><a href="register.php" class="button">Register</a></li>
                </ul>
            </div>
        </nav>
    </header>
</body>

</html>