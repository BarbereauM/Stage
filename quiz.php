<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="stylequiz.css" rel="stylesheet">
    <title>QUIZ</title>
</head>
<header>
        <ul>
            <li><a class="active" href="index.php">Acceuil</a></li>
            <li><a href="quiz.php">Quiz</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </header>
<body>
    <div id="page">
    <h1>QUIZ PHP</h1>
    <form action="result.php" method="post" id="quiz">
		
            <ol>
            
                <li>
                
                    <h3>Mon prénom est ?</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) Mathys </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Maxime</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) George</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) Autre</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Devriez-vous me prendre en stage ?</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) Oui</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) Oui</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) Oui</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) Aucun avis</label>
                    </div>
                
                </li>
                
                <li style="margin-right: 285px">
                
                    <h3>je sais pas encore</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) Oui</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) Non</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) maybe</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) idk</label>
                    </div>
                
                </li>
     
            </ol>
            
            <input type="submit" value="submit" class="submitbtn" />
        
        </form>
    </div>

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