<?php 
    include ('db.php');
    $errors = array();
    if(isset($_POST['register']))
    {   
        $email    = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
       
        if(empty($email))
        {
                array_push($errors,"no email");
        }

        if (empty($password))
        {
                array_push($errors,"no password");
        }

        if (empty($username))
        {
                array_push($errors,"no username");
        }
        $query = "SELECT email,username FROM users WHERE email = '$email' or username = '$username' limit 1";
        $result=mysqli_query($conn,$query);
        $user = mysqli_fetch_assoc($result);
        if($user['email']==$_POST['email'])
        {
            array_push($errors,'email exists');
        }

        if($user['username']==$_POST['username'])
        {
            array_push($errors,'username taken');
        }
    
        if(empty($errors))
        {
            $query  = "INSERT INTO users (email, password, username) VALUES ('$email', '$password', '$username')";
            $return=mysqli_query($conn,$query); 
            header('location: login.php');
        }
         

        


    }   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wholepage">
        <div class="container">
            <div class="signup">
                <p class="sign-up-text">Sign Up</p>
            </div>

           
            <?php foreach($errors as $error): ?>
                <p id="error"><?= $error ?></p>
            <?php endforeach; ?>
        
            <form id="form" action="signup.php" method="POST">
                <div class="emaildiv">
                    <p class="text">Email:</p>
                    <input type="text" id="email" name="email">
                   
                </div>
                <div class="passworddiv">
                    <p class="text">Password:</p>
                    <input type="password" id="password" name="password" >
                </div>
                 <div class="userdiv">
                    <p class="text">Username:</p>
                    <input type="username" id="username" name="username">
                </div>
                <div class="buttondiv">
                    <button type="submit" class="button" name="register">Sign Up</button>
                </div>
            </form>

            <div class="logindiv">
                <p class="login-text">Already have an account? <a class="link-color" href="login.php">Login</a></p>
            </div>
                

        </div>
    </div>
</body>
</html>


