<?php include 'includes/header.php'; ?>


<link rel="stylesheet" href="core/contact.css">


<body>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <section id="contact">
        <h1 class="section-header">Contact</h1>
        <div class="contact-wrapper">
            <?php 
                if(isset($_SESSION['error'])) {
                    echo "
                <div class='alert alert-danger'>".$_SESSION['error']."
                    </div>";
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

            <form id="contact-form" class="form-horizontal" role="form" method="post"
                action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="name" placeholder="Name" name="name"
                            value="<?php echo (isset($_SESSION['name'])) ? $_SESSION['name'] : '' ?>" required>

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email"
                            value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : '' ?>" required>

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="subject" class="form-control" id="subject" placeholder="Subject" name="subject"
                            value="<?php echo (isset($_SESSION['subject'])) ? $_SESSION['subject'] : '' ?>" required>

                    </div>
                </div>

                <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message"
                    required><?php echo (isset($_SESSION['message'])) ? $_SESSION['message'] : '' ?></textarea>

                <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
                    <div class="alt-send-button">
                        <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
                    </div>
                </button>
            </form>

            <div class="direct-contact-container">
                <ul class="contact-list">
                    <li class="list-item">
                        <i class="fa fa-map-marker fa-2x"></i>
                        <span class="contact-text place">Lagos Island, Your State</span>
                    </li>
                    <li class="list-item">
                        <i class="fa fa-phone fa-2x"></i>
                        <span class="contact-text phone">
                            <a href="tel:1-212-555-5555" title="Give me a call">(212) 555-2368</a>
                        </span>
                    </li>
                    <li class="list-item">
                        <i class="fa fa-envelope fa-2x"></i>
                        <span class="contact-text gmail">
                            <a href="mailto:your-email@example.com" title="Send me an email">your-email@example.com</a>
                        </span>
                    </li>
                </ul>

                <hr>

                <ul class="social-media-list">
                    <li>
                        <a href="#" target="_blank" class="contact-icon">
                            <i class="fa fa-github" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/" target="_blank" class="contact-icon">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#" target="_blank" class="contact-icon">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" class="contact-icon">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>

                <hr>
            </div>
        </div>
    </section>

</body>

</html>