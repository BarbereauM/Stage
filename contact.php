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
            $retour = mail('jules@free.fr', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
            if($retour)
                echo '<p>Votre message a été envoyé.</p>';
            else
                echo '<p>Erreur.</p>';
        }
    }
    ?>
    
</body>
</html>