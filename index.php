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
    <div class="mycontainer">
        <div class="card">
            <h1 class="ctitle1">E-class</h1>
            <h2 class="ctitile2">SIGN IN</h2>
            <p class="cpara">Enter your credentials to access your account</p>
            <form action="test.php" class="form1">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label labale1">Email</label>
                    <input type="text" class="form-control input1   " id="formGroupExampleInput" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label labale1">Password</label>
                    <input type="password" class="form-control input1" id="formGroupExampleInput2" placeholder="Enter your password">
                </div>
                <button type="button" class="btn btn-color">SIGN IN</button>                
            </form>
            <p class="cpara2">Forgot your password? <a href="#" class="mylink">Reset Password</a></p>
        </div>
        <a href="./dashboard.php">dashboard</a> 
    </div>






<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>