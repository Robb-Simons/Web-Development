<html>
     <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="styles/header.css" rel="stylesheet">
         <link href="styles/footer.css" rel="stylesheet">
         <link href="styles/contact.css" rel="stylesheet">
         <title>Rose Jung</title>
        <script src="https://www.google.com/recaptcha/api.js?render=6LexvaMUAAAAAPD1SzoHOT50dBbUoy0yPQM4Pbz8"></script>
<script>
    grecaptcha.ready(function() {
    // do request for recaptcha token
    // response is promise with passed token
        grecaptcha.execute('6LexvaMUAAAAAPD1SzoHOT50dBbUoy0yPQM4Pbz8', {action:'validate_captcha'})
                  .then(function(token) {
            // add token value to form
            document.getElementById('g-recaptcha-response').value = token;
        });
    });
</script>
     </head>
     <body>
         <?php include 'header.php';?>
         <h1>Send Rose a message</h1>
         <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
         <input type="hidden" name="action" value="validate_captcha">
         <form method="post" name="fanmail" id="contact" action="action_page.php">
             Name:<br><br>
             <input type="text" name="name" value="">
             <br><br>
             Email:<br><br>
             <input type="email" name="email" id="email"><br><br>
             Comment(s):<br><br>
             <textarea name="comment" rows="5" cols="40"></textarea>
             <br><br>
             <input id="submit" type="submit" value="Submit" action="grecaptcha.execute">
         </form> 
         
         
         <?php include 'footer.php';?>
     <body>




<!-- Butterflyroseart@gmail -->

</html>