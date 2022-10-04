<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/kontakt.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
    <script src="../js/navbar.js"></script>
    <div class="mainContainer">
      <div class="title">
        <h1>Kontakt</h1>
      </div>
        <form class="contact-form" action="form.php" method="POST">
            <label for="contact-name" class="contact-label">Name</label>
            <input name="name" id="contact-name" class="contact-input" type="text" placeholder="Name eingeben *" required="required" />
  
            <label for="contact-email" class="contact-label">Email</label>
            <input name="email" id="contact-email" class="contact-input" type="text" placeholder="Email-Adresse eingeben *" required="required"  />
  
            <label for="contact-message" class="contact-label">Nachricht</label>
            <textarea name="message" id="contact-message" class="contact-input contact-message" placeholder="Deine Nachricht *" required="required"></textarea>
            
            <input class="contact-submit" name="sendMailBtn" type="submit" value="Nachricht senden" />
        </form>
    </div>
    <script src="../js/index.js"></script>
</body>
</html>