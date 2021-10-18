<html>
    <head>
        <title>
            NumberSpell
        </title>
        <link rel="stylesheet" href="..\Case Study Website\style.css">
    </head>
    <body background = "..\Case Study Website\Images\background1.jpg">
    <div>
        <!---Title---> 
        <a href="..\Case Study Website\index.php" class = "title" style="margin-bottom: 0%; color:white; text-decoration: none;">Case Study</a>
        <p class = "title" style="font-size: 1.5vw; padding-left:3%;">Number Spell</p>
        <!---Title---> 
    </div>
    <!---Calculator Screen--->
    <div class = "screen">
    <?php
        /* initialize variables */
        $number = isset($_POST['num']) ?$_POST['num'] : '0'; 
        /* initialize variables */
    ?>
        <!---Input form--->
        <form method="post" class="input-text" style="padding-top:10%;" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Input digits:<input type="number" id="code" class ="input" name="num" max="9999" min ="0" style ="width:11%;" autocomplete="off" value = "<?php echo $number;?>">
            <br>
            =
        <!---Input form--->
    <?php
        /* Calculation */
        /* NumberFormatter extension (built in to PHP) */
        $f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
        $answer = $f->format( $number); 
        echo $answer;
        /* Calculation */
    ?>
    </div>
    <!---Calculator Screen--->

    <!---Menu Buttons--->
    <div class="menu-cartesian">
        <a href="..\Case Study Website\cartesian.php" class = "numerical-button" style="font-size: 1.9vw;">Cartesian Plane</a>
        <a href="..\Case Study Website\character2digit.php" class = "numerical-button">Char To Digit</a>
        <a href="..\Case Study Website\calculator.php" class = "numerical-button">Calculator</b></a>
        <a href="..\Case Study Website\numberspell.php" class = "numerical-button" style="background-color: #ffe733; color: rgb(0, 0, 0);">Number Spell</a>
        <input type="submit" id= "submit"  class = "submitbtn">
        </div>
    </div>
    <!---Menu Buttons--->
    </form>
    </body>