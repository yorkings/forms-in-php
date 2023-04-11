<?php?>
<?php
?>
<!DOCTYPE html>
<html lan="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>login platform</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript" src="app.js"></script>
    </head>
    <body>
        <section class="header">
            <h1 class="logo">logo</h1>
            <nav class="navbar">
                <a href=" home.php">Home</a>
                <a href="about.php">about</a>
                <a href="contact.php">contact</a>
                <button class="login-btn"  onclick="start" ><a href="login.php">login</a></button>
            </nav>
        </section>
       <div class="form-lgn">
         <form action="get.php" method="post">
            <div class="input">
             <label>username :</label>
             <input type="text" name="username" placeholder="username" />
            </div>
            <div class="input">
             <label>password :</label>
             <input type="password" name="password" placeholder="password" />
           </div>
           <div>
             <input type="checkbox"/>
             <span>remember me<span>
           </div>
            <p>create new account <a href="signup.php">sign_up</a></p>
           <button input="submit" name="submit" class="btn">login</button>
         </form> 
       </div>  
                
    </body>
</html>