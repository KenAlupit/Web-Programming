<html>
    <head>
        <title>
            Character2Digit
        </title>
        <link rel="stylesheet" href="..\case Study Website\style.css">
    </head>
    <body background = "..\Case Study Website\Images\background1.jpg">
    <!---Title---> 
    <div>
        <a href="..\Case Study Website\index.php" class = "title" style="margin-bottom: 0%; color:white; text-decoration: none;">Case Study</a>
        <p class = "title" style="font-size: 1.5vw; padding-left:1.5%;">Character To Digit</p>
    </div>
    <!---Title---> 
    <!---Calculator Screen--->
    <div class = "screen">
    <?php
        /* initialize variables */
        $character = isset($_POST['character']) ?$_POST['character'] : ''; 
        /* initialize variables */
    ?>
        <!---Input form--->
        <form method="post" class="input-text" style="padding-top:19%;" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Input character:<input type="text" id="code" class ="input" name="character" maxlength = "1" minlength = "1" pattern="[A-Za-z]{1}" autocomplete="off" value = "<?php echo $character;?>">
        <!---Input form--->
            <?php
            /* Calculation */
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                /* A,B,C = 2 */
                if($character == 'a' or $character == 'b' or $character == 'c'){
                    echo "<p class= \"input-text\">= 2</p>";
                }
                /* D,E,F = 3 */
                elseif($character == 'd' or $character == 'e' or $character == 'f'){
                    echo "<p class= \"input-text\">= 3</p>";
                }
                /* G,H,I = 4 */
                elseif($character == 'g' or $character == 'h' or $character == 'i'){
                    echo "<p class= \"input-text\">= 4</p>";
                }
                /* J,K,L = 5 */
                elseif($character == 'j' or $character == 'k' or $character == 'l'){
                    echo "<p class= \"input-text\">= 5</p>";
                }
                /* M,N,O = 6 */
                elseif($character == 'm' or $character == 'n' or $character == 'o'){
                    echo "<p class= \"input-text\">= 6</p>";
                }
                /* P,Q,R,S = 7 */
                elseif($character == 'p' or $character == 'q' or $character == 'r'or $character == 's'){
                    echo "<p class= \"input-text\">= 7</p>";
                }
                /* T,U,V = 8 */
                elseif($character == 't' or $character == 'u' or $character == 'v'){
                    echo "<p class= \"input-text\">= 8</p>";
                }
                /* W,X,Y = 9 */
                elseif($character == 'w' or $character == 'x' or $character == 'y'){
                    echo "<p class= \"input-text\">= 9</p>";
                }
                /* There is no digit corresponding to Z */
                elseif($character == 'z'){
                    echo "<p class= \"input-text\">= There is no digit corresponding to Z</p>";
                }
            }
            /* Calculation */
    ?>
        </div>
        <!---Calculator Screen--->
        <!---Menu Buttons--->
        <div class="menu-cartesian">
            <a href="..\Case Study Website\cartesian.php" class = "numerical-button" style="font-size: 1.9vw;">Cartesian Plane</a>
            <a href="..\Case Study Website\character2digit.php" class = "numerical-button" style="background-color: #ffe733; color: rgb(0, 0, 0);">Char To Digit</a>
            <a href="..\Case Study Website\calculator.php" class = "numerical-button">Calculator</b></a>
            <a href="..\Case Study Website\numberspell.php" class = "numerical-button">Number Spell</a>
            <input type="submit" id= "submit"  class = "submitbtn">
        </div>
        <!---Menu Buttons--->
    </div>
    </form>
    </body>