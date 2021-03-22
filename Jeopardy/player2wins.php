<!DOCTYPE html>

<?php  include("turns&scores.php")  ?>
<html>

<head>
    <title>Jeopardy Login</title>
    <style>
        html {
            height: 100%;
        }
        
        h1 {
            color: #6c3;
            text-align: center;
            font-weight: bold;
            font-size: 50px;
        }
        
        body {
            margin: 0;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-image: url("./images/congrats.gif");
        }
        
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
        
        #info {
            margin-left: auto;
            margin-right: auto;
        }
        
        h1 {
            font-family: monospace;
        }
        
        @keyframes slide {
            0% {
                transform: translateX(-25%);
            }
            100% {
                transform: translateX(25%);
            }
        }
        
        div.bottom {
            bottom: 0;
            float: right;
            position: absolute;
            left: 92%;
        }
    </style>
</head>

<body>
    <div class="content">
        <h1>Congratulations, <?php $Player2Name?></h1>
        <h1>You won the game</h1>
        <br>
        <br>
        <a href="./resetGame.php">Play again</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="./logout.php">Quit Game</a>
    </div>
</body>

</html>