<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>


<body class="hold-transition login-page">

    <link rel="stylesheet" href="core/forg.css">

    <div class="login-box">
        <?php
              if (isset($_SESSION['error'])) {
              echo "
                  <div class='callout callout-danger text-center' style='color: #d9534f;'>
                      <p>" . $_SESSION['error'] . "</p> 
                  </div>
              ";
              unset($_SESSION['error']);
          }

          if (isset($_SESSION['success'])) {
              echo "
                  <div class='callout callout-success text-center' style='color: #5cb85c;'>
                      <p>" . $_SESSION['success'] . "</p> 
                  </div>
              ";
              unset($_SESSION['success']);
          }

          // Set a timeout using meta refresh tag
          echo '<meta http-equiv="refresh" content="5;url=password_forgot.php">';
        ?>
        <div class="login-box-body">
            <p class="login-box-msg">Enter email associated with account</p>

            <form action="reset.php" method="POST">
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat" name="reset"><i
                                class="fa fa-mail-forward"></i> Send</button>
                    </div>
                </div>
            </form>
            <br>
            <a href="login.php">I rememberd my password</a><br>
            <a href="index.php"><i class="fa fa-home"></i> Home</a>
        </div>
    </div>
</body>

</html>