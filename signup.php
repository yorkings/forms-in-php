
<?php ?>
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
  
       <div class="form-lgn2">
         <form method="post" action="signup-post.php">
            <div class="input">
             <label>username :</label>
             <input type="text" name="username" placeholder="username" />
            </div>
            <div class="input">
                <label>Firstname</label>
                <input type="text" name="firstname" placeholder="firstname" required>
            </div>
            <div class="input">
                <label>Lastname</label>
                <input type="text" name="lastname" placeholder="lastname" required>
            </div>
            <div class="input">
             <label>Email:</label>
             <input type="email" name="email" placeholder="email"  required/>
           </div>
            <div class="input">
             <label>password :</label>
             <input type="password" name="password" placeholder="password" required />
           </div>
           <div class="input">
             <label>confirm :</label>
             <input type="password" name="confirm" placeholder="password"  required/>
           </div>
           <div class="input">
             <!-- <label>email :</label>
             <input type="text" name="email" placeholder="email"  />-->
           </div>

          
            <p>already have an account <a href="login.php">login</a></p>
           <button input="submit" class="btn" name="submit">submit</button>
         </form> 
       </div>  
                
    </body>
</html>