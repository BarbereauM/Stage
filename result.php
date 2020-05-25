<!DOCTYPE html>
<html>
 
<head>
	<meta charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body>
 
	<div id="page">
 
		<h1>Result quiz</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "D") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 3 correct</div>";
            
        ?>
	
	</div>
 
</body>
 
</html>