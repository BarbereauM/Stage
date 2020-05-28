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
            <li><a class="active" href="home.php">Acceuil</a></li>
            <li><a href="quiz.php">Quiz</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
</header>
<body>
    <form method="post">

        <label>Email</label>
        <input type="email" name="email" required><br>

        <label>Message</label>
        <textarea id="msg" name="message" required></textarea><br>
        
        <input type="submit">

    </form>

    <?php
    if (isset($_POST['message'])) {
        $position_arobase = strpos($_POST['email'], '@');
        if ($position_arobase === false)
            echo '<p>Votre email doit comporter un arobase.</p>';
        else {
            $retour = mail('barbereau.maxime@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
            if($retour)
                echo '<p>Votre message a été envoyé.</p>';
            else
                echo '<p>Erreur.</p>';
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