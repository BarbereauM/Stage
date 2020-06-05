<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="stylecontact.css" rel="stylesheet">
    <title>Contact</title>
</head>
<header>
        <ul>
            <li><a class="active" href="index.php">Acceuil</a></li>
            <li><a href="quiz.php">Quiz</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
</header>
<body>
    <form method="POST" action="">

        <label>Email</label>
        <input type="email" name="email" required><br>

        <label>Message</label>
        <textarea id="msg" name="message" required></textarea><br>
        
        <input type="submit">

    </form>

    <?php
    ini_set("sendmail_from","barbereau.maxime@gmail.com");
    if(isset($_POST['message'])){
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['email'] . "\r\n";

        $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
        <b>Email : </b>' . $_POST['email'] . '<br>
        <b>Message : </b>' . $_POST['message'] . '</p>';

        $retour = mail('barbereau.maxime@fgmail.com', 'Envoi depuis page Contact', $message, $entete);
        if($retour) {
            echo '<p>Votre message a bien été envoyé.</p>';
        }
    }
    ?>
    <footer>
        <small>&copy; Copyright 2020, BARBEREAU Maxime</small>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

        <section class="social">
            <a href="https://github.com/BarbereauM" target="_blank">
		        <i class="fab fa-github"></i>
            </a>
            
	        <a href="https://www.linkedin.com/in/maxime-barbereau-b34843194/" target="_blank">
		        <i class="fab fa-linkedin-in"></i>
            </a>
        </section>
          
    </footer>
    
</body>
</html>