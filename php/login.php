<?php
    include ('db.php');
    $errors = array();
    if(isset($_POST['login']))
    {
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);

   
        if (empty($email))
        {
                array_push($errors,'no email provided');
        }
        if (empty($password))
        {
                array_push($errors,'no password provided');
        }
        $query = "SELECT id, email, password, username FROM users WHERE email = '$email' LIMIT 1";
        $result = mysqli_query($conn,$query);
        $users=mysqli_fetch_assoc($result);

            if($users['email']==$_POST['email'])
            {
                if($users['password'] ==$_POST['password'] )
                    {
                        $_SESSION['username'] = $users['username'];
                        $_SESSION['id']       = $users['id'];
                        header('location: home.php');
                    }
                else
                    {
                            array_push($errors,'wrong password');
                    }
            }
            else
            {
                    array_push($errors,'acount doesnt exist ');
            }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wholepage">
        <div class="container">
            <div class="login">
                <p class="log-in-text">Log in</p>
            </div>

            <?php foreach($errors as $error): ?>
                <p id="error" class="error"><?= $error ?></p>
            <?php endforeach; ?>

            <form id="form" action="login.php" method="POST">
                <div class="emaildiv">
                    <p class="text">Email:</p>
                    <input required type="email" name="email" id="email" placeholder="example@gmail.com">
                </div>
                <div class="passworddiv">
                    <p class="text">Password:</p>
                    <input required type="password" name="password" id="password" placeholder="********">
                </div>
                <div class="buttondiv">
                    <button type="submit" name="login">Log in</button>
                </div>
            </form>

            <div class="signupdiv">
                <p class="signup-text">Don't have an account? <a class="link-color" href="signup.php">Sign up</a></p>
            </div>
        </div>
    </div>

</body>
</html>
