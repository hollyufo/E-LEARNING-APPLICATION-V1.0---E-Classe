<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
</head>
<body>
        <!-- Login script -->
        <?php include('./controllers/reset.php'); ?>
    <div class="mycontainer">
        <div class="card">
            <h1 class="ctitle1">E-class</h1>
            <h2 class="ctitile2">Reset your password</h2>
            <p class="cpara">Enter your email to recover your account</p>
            <form name="form" class="form1" method = "POST">
                    <?php echo $message_success; ?>
                    <?php echo $message_erro; ?>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label labale1">Email</label>
                    <input name="email_signin" id="email_signin" type="text" class="form-control input1" placeholder="Enter your email">
                </div>
                <button type="submit" name="reset" id="sign_in" class="btn btn-color">Send reset password</button>                
            </form>
            <p class="cpara2">Don't have an account ?<a href="./signup.php" class="mylink">Create one</a></p>
        </div>
    </div>






<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="./assets/js/passvalidation.js" ></script>
</body>
</html>