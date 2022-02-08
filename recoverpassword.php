<?php 
    include('./controllers/changepasswrd.php');
?>
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
        <?php include('./config/db.php'); ?>
    <div class="mycontainer">
        <div class="card">
            <h1 class="ctitle1">E-class</h1>
            <h2 class="ctitile2">Reset your password</h2>
            <p class="cpara">Enter your new password</p>
            <form name="form" class="form1" method = "POST">
                <?php echo $message_success ?>
                <?php echo $message ?>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label labale1">Password</label>
                    <input name="password1" id="email_signin" type="password" class="form-control input1" placeholder="Enter your password">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label labale1">Password</label>
                    <input name="password2" id="email_signin" type="password" class="form-control input1" placeholder="confirme password">
                </div>
                <button type="submit" name="reset" id="sign_in" class="btn btn-color">reset password</button>                
            </form>
        </div>
    </div>






<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="./assets/js/passvalidation.js" ></script>
</body>
</html>