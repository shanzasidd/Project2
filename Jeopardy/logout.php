<?php  
    //echo "game has been reset";
    setcookie("player1Score", 0, time() + 31536000);
    setcookie("player2Score", 0, time() + 31536000);
    setcookie("player1turn", TRUE, time() + 31536000);
    setcookie("player2turn", FALSE, time() + 31536000);
    setcookie("questionCount", 0 , time() + 31536000);

    //reset players names
    setcookie("player1Name", FALSE, time() + 31536000);
    setcookie("player2Name", FALSE, time() + 31536000);
    
    //first row
    setcookie("firstfirst", FALSE, time() + 31536000);
    setcookie("firstsecond", FALSE, time() + 31536000);
    setcookie("firstthird", FALSE, time() + 31536000);
    setcookie("firstfourth", FALSE, time() + 31536000);

    //second row
    setcookie("secondfirst", FALSE, time() + 31536000);
    setcookie("secondsecond", FALSE, time() + 31536000);
    setcookie("secondthird", FALSE, time() + 31536000);
    setcookie("secondfourth", FALSE, time() + 31536000);

    //third row
    setcookie("thirdfirst", FALSE, time() + 31536000);
    setcookie("thirdsecond", FALSE, time() + 31536000);
    setcookie("thirdthird", FALSE, time() + 31536000);
    setcookie("thirdfourth", FALSE, time() + 31536000);

    //fourth row
    setcookie("fourthfirst", FALSE, time() + 31536000);
    setcookie("fourthsecond", FALSE, time() + 31536000);
    setcookie("fourththird", FALSE, time() + 31536000);
    setcookie("fourthfourth", FALSE, time() + 31536000);

    //fifth row
    setcookie("fifthfirst", FALSE, time() + 31536000);
    setcookie("fifthsecond", FALSE, time() + 31536000);
    setcookie("fifththird", FALSE, time() + 31536000);
    setcookie("fifthfourth", FALSE, time() + 31536000);

    
    header("location: login.html");
    // exit();
?>