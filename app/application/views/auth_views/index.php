<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-eLife</title>
    <link rel="stylesheet" href="../../assets/dist/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body style="background-color: hsl(0, 0%, 95%);">
    <div class="container mx-auto d-flex justify-content-center align-items-center" style="height: 100vh; overflow: hidden;">

        <div class="card" style="min-width: 20rem;">
            <div class="card-body pt-0">
                <div class="brand text-center my-4">
                    <img class="rounded" style="max-width: 110px; max-height: 90px;" src="../../assets/dist/images/brand.png" alt="brang-logo">
                    <p class="fs-5">Welcome to e-Life</p>
                </div>

                <?php echo form_open('/', array('class' => 'needs-validation', 'novalidate' => '')); ?>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="userName" placeholder="jhondoe" name="userName" required>
                    <label for="userName">User Name</label>
                    <div class="invalid-feedback">
                        Please enter a username.
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                    <label for="password">Password</label>
                    <div class="invalid-feedback">
                        Please enter your password.
                    </div>
                </div>

                <div class="d-grid g-2">
                    <button type="submit" class="btn btn-primary d-block">Sign In</button>
                    <button class="btn btn-link d-block">Forgot Password</button>
                </div>
                <?php echo form_close(); ?>

                <?php if (isset($_SESSION['error'])): ?>
                    <div class="alert alert-danger text-center fw-bold" role="alert">
                        <?=$_SESSION['error']?>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>

    <script src="../../assets/dist/js/main.js"></script>
</body>

</html>