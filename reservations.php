<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>


<body>

    <link rel="stylesheet" href="core/reservations.css">

    <section id="reserve">
        <div class="reserve-container">

            <div class="reserve-header">
                <div class="container">
                    <h2>Make reservations</h2>
                </div>
            </div>

            <div class="reserve-form-container">
                <div class="container">
                    <form action="" id="reserve-form">
                        <div class="row">

                            <div class="form-group">
                                <label for="">How many people?</label>
                                <input type="tel" class="form-control" placeholder="Input number of people">
                            </div>



                            <div class="form-group">
                                <label for="">When is your date?</label>
                                <input type="date" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Time</label>
                                <input type="time" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" placeholder="Full Name">
                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" placeholder="Your Email Address">
                            </div>

                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="tel" class="form-control" placeholder="Your Phone">
                            </div>

                            <div class="form-group submit-container">
                                <button type="submit">
                                    SUBMIT
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <div class="reserve-image-container">

            </div>

        </div>
    </section>


</body>

</html>