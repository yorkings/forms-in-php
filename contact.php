<?php?>
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
       <div  class=form-lgn3>
         <form action="index.php" method="post">
            <h2>GET IN TOUCH</h2>

            <p>please fill in the fields</p>
            <div class="input">
             <input type="text" name="fullname" placeholder="fullname" />
            </div>
            <div class="input">
             <input type="email" name="email" placeholder="email" />
           </div>
           <div class="input">
            <input type="subject" name="subject" placeholder="subject" />
          </div>
          <div class="input">
            <textarea  name="message" placeholder="enter text"></textarea>
          </div>
          <button input="submit" class="btn">SEND-EMAIL</button>
      
         </form> 
       </div>  
                
    </body>
</html>