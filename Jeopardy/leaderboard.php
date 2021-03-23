
<html> 
<head>
	<title> Jeopardy Leader Board</title>
	<style>
	.content {
            background-color: rgba(255, 255, 255, .8);
            border-radius: .25em;
            box-shadow: 0 0 .25em rgba(0, 0, 0, .25);
            box-sizing: border-box;
            left: 50%;
            padding: 10vmin;
            position: fixed;
            text-align: left;
            top: 50%;
            transform: translate(-50%, -50%);
        }
</style>
	<!-- CSS linking -->
	<link href="./jeopardy.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
	
	include("turns&scores.php");
   
	if($player1Score != 0 || $player2Score != 0){ 
		
	$player1Name = $_COOKIE["player1Name"];
	$player2Name = $_COOKIE["player2Name"];

   file_put_contents("leaderboard.txt", "\n" .$player1Name.": ".(int)$player1Score, FILE_APPEND);
   file_put_contents("leaderboard.txt", "\n" .$player2Name.": ".(int)$player2Score, FILE_APPEND);
  
	}

?>

<div class="content">
		<h1 style="color:yellow">Jeopardy Leader Board</h1>
		<h2 style="color:red">Name    Score</h2>
<?php
$file = fopen("leaderboard.txt","r");
while(! feof($file))
  {
  echo fgets($file). "<br />";
  }
fclose($file);
?>
		
		<br><br>
		<a href="startGame.php">Go Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="resetGame.php">Play Again</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="logout.php">Quit</a>
	
	</div>



</body>
</html>