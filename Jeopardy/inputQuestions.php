<?php
  /* 
  * In this file, we set the questions for the all the categories.
  * There are 4 rows and 4 columns, making it a 16 question jeopardy.
  * Each row has a sports, music, education, and trivia questions
  */
	session_start();
	
    if(!isset($_COOKIE["player1Score"])){
        setcookie("player1Score","0",time()+ 31536000);
    }
    if(!isset($_COOKIE["player2Score"])){
        setcookie("player2Score","0",time()+ 31536000);
    }
    if($_COOKIE["player1turn"]){
        $player1turn = TRUE;
    }else{
        $player1turn = FALSE;
    }
    $player1Score = $_COOKIE["player1Score"];
    $player2Score = $_COOKIE["player2Score"];
    
    
    // first row
	if(isset($_POST["firstfirst"])){ //sports question
        $question = "Who is the first coach to win the European Champions League in three consecutive years ?";
        $correctAnswer = "option2";
        $option1 = "José Mourinho";
        $option2 = "Zinedine Zidane";
        $option3 = "Pep Guardiola";
        $option4 = "Carlo Ancelotti";
        $questionScore = 200;
        setcookie("firstfirst", TRUE, time() + 31536000);
	}elseif (isset($_POST["firstsecond"])) { //music Question
        $question = "";
        $correctAnswer = "";
        $option1 = "";
        $option2 = "";
        $questionScore = 200;
        setcookie("firstsecond", TRUE, time() + 31536000);
    }elseif (isset($_POST["firstthird"])) { //education Question
        $question = "";
        $correctAnswer = "";
        $option1 = "";
        $option2 = "";
        $questionScore = 200;
        setcookie("firstthird", TRUE, time() + 31536000);
    }elseif (isset($_POST["firstfourth"])) { //Trivia Question
        $question = "";
        $correctAnswer = "";
        $option1 = "";
        $option2 = "";
        $questionScore = 200;
        setcookie("firstfourth", TRUE, time() + 31536000);
    
        // second row questions
    }elseif (isset($_POST["secondfirst"])) { // sports Question
        $question = "";
        $correctAnswer = "";
        $option1 = "";
        $option2 = "";
        $questionScore = 400;
        setcookie("secondfirst", TRUE, time() + 31536000);
    }elseif (isset($_POST["secondsecond"])) { // music Question
        $question = "";
        $correctAnswer = "";
        $option1 = "";
        $option2 = "";
        $questionScore = 400;
        setcookie("secondsecond", TRUE, time() + 31536000);
    }elseif (isset($_POST["secondthird"])) { // education Question
        $question = "";
        $correctAnswer = "";
        $option1 = "";
        $option2 = "";
        $questionScore = 400;
        setcookie("secondthird", TRUE, time() + 31536000);
    }elseif (isset($_POST["secondfourth"])) { // Trivia Question
        $question = "";
        $correctAnswer = "";
        $option1 = "";
        $option2 = "";
        $questionScore = 400;
        setcookie("secondfourth", TRUE, time() + 31536000);
    
        // third row question
    }elseif (isset($_POST["thirdfirst"])) { // sports Question
        $question = "";
        $correctAnswer = "";
        $option1 = "";
        $option2 = "";
        $questionScore = 600;
        setcookie("thirdfirst", TRUE, time() + 31536000);
    }elseif (isset($_POST["thirdsecond"])) { // music Question
        $question = "";
        $correctAnswer = "";
        $option1 = "";
        $option2 = "";
        $questionScore = 600;
        setcookie("thirdsecond", TRUE, time() + 31536000);
    }elseif (isset($_POST["thirdthird"])) { // education Question
        $question = "";
        $correctAnswer = "";
        $option1 = "";
        $option2 = "";
        $questionScore = 600;
        setcookie("thirdthird", TRUE, time() + 31536000);
    }elseif (isset($_POST["thirdfourth"])) { // Trivia Question
        $question = "";
        $correctAnswer = "";
        $option1 = "";
        $option2 = "";
        $questionScore = 600;
        setcookie("thirdfourth", TRUE, time() + 31536000);
    
        // fourth row question
    }elseif (isset($_POST["fourthfirst"])) { //sports Question
        $question = "";
        $correctAnswer = "";
        $option1 = "";
        $option2 = "";
        $questionScore = 800;
        setcookie("fourthfirst", TRUE, time() + 31536000);
    }elseif (isset($_POST["fourthsecond"])) { // music Question
        $question = "?";
        $correctAnswer = "";
        $option1 = "";
        $option2 = "";
        $questionScore = 800;
        setcookie("fourthsecond", TRUE, time() + 31536000);
    }elseif (isset($_POST["fourththird"])) { // education Question
        $question = "";
        $correctAnswer = "";
        $option1 = "";
        $option2 = "";
        $questionScore = 800;
        setcookie("fourththird", TRUE, time() + 31536000);
    }elseif (isset($_POST["fourthfourth"])) { // Trivia Question
        $question = "";
        $correctAnswer = "";
        $option1 = "";
        $option2 = "";
        $questionScore = 800;
        setcookie("fourthfourth", TRUE, time() + 31536000);
    
    

        // fifth row question
    }elseif (isset($_POST["fifthfirst"])) { //sports Question
        $question = "";
        $correctAnswer = "";
        $option1 = "";
        $option2 = "";
        $questionScore = 1000;
        setcookie("fifthfirst", TRUE, time() + 31536000);
    }elseif (isset($_POST["fifthsecond"])) { // music Question
        $question = "?";
        $correctAnswer = "";
        $option1 = "";
        $option2 = "";
        $questionScore = 1000;
        setcookie("fifthsecond", TRUE, time() + 31536000);
    }elseif (isset($_POST["fifththird"])) { // education Question
        $question = "";
        $correctAnswer = "";
        $option1 = "";
        $option2 = "";
        $questionScore = 1000;
        setcookie("fifththird", TRUE, time() + 31536000);
    }elseif (isset($_POST["fifthfourth"])) { // Trivia Question
        $question = "";
        $correctAnswer = "";
        $option1 = "";
        $option2 = "";
        $questionScore = 1000;
        setcookie("fifthfourth", TRUE, time() + 31536000);
    
    }
?>