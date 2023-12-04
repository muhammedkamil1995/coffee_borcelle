<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>


<link rel="stylesheet" href="core/ind.css">


<body>
    <div class="wrapper">
        <div class="content-wrapper">

            <!-- Main content -->
            <div class="container">
                <?php
                if (isset($_SESSION['error'])) {
                    echo "
                        <div class='alert alert-danger'>
                            " . $_SESSION['error'] . "
                        </div>
                    ";
                    unset($_SESSION['error']);
                }
                ?>

                <showcase>
                    <div class="container">
                        <div class="description">
                            <h3>Discover Coffee Borcelle</h3>
                            <p>Elevating Your Coffee Experience</p>
                        </div>

                        <div class="row row--small row--margin row--center">
                            <div class="col-md-4 col-sm-4 coffee">
                                <img src="https://image.ibb.co/bKy6Db/coffee_item_2.png" class="coffee__img">
                                <h2 class="coffee__name">Mocha Latte</h2>
                                <p class="coffee__descr">
                                    Indulge in the exquisite flavor of our Mocha Latte – a harmonious blend of decadent
                                    chocolate
                                    and velvety espresso. Crafted to delight your taste buds, this beverage is a
                                    symphony of rich aromas and smooth textures.
                                </p>
                            </div>

                            <div class="col-md-4 col-sm-4 coffee">
                                <img src="https://image.ibb.co/nN0WeG/coffee_item_1.png" class="coffee__img">
                                <h2 class="coffee__name">Pour Over</h2>
                                <p class="coffee__descr">
                                    Immerse yourself in the essence of pure coffee with our meticulously crafted Pour
                                    Over brew.
                                    Every sip is a journey through the art of brewing, capturing the rich and
                                    robust flavors that define the true character of coffee.
                                </p>
                            </div>


                            <div class="col-md-4 col-sm-4 coffee">
                                <img src="https://image.ibb.co/dHQa6w/coffee_item_3.png" class="coffee__img">
                                <h2 class="coffee__name">Espresso</h2>
                                <p class="coffee__descr">
                                    Energize your mornings with the intense and bold flavor of our Espresso. Savor the
                                    invigorating
                                    notes that define the essence of this classic coffee, meticulously brewed to
                                    perfection.
                                </p>
                            </div>

                        </div>
                        <?php include 'includes/footer.php'; ?>
                    </div>

</body>
<?php include 'includes/footer.php'; ?>

</html>