<html>
    <head>
        <title>
            Calculator
        </title>
        <link rel="stylesheet" href="..\case Study Website\style.css">
    </head>
    <body background = "..\Case Study Website\Images\background1.jpg">
    <!---Title---> 
    <div>
        <a href="..\Case Study Website\index.php" class = "title" style="margin-bottom: 0%; color:white; text-decoration: none;">Case Study</a>
        <p class = "title" style="font-size: 1.5vw; padding-left:4%;">Calculator</p>
    </div>
    <!---Title---> 
    <!---Calculator Screen--->
    <div class = "screen">
    <?php
        /* initialize variables */
        $num = isset($_POST['num']) ?$_POST['num'] : ''; 
        /* initialize variables */
    ?>
        <!---Input form--->
        <form method="post" class="input-text" style="padding-top:19%;" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <input type="text" id="code" class ="input" style="width:100%;"name="num" autocomplete="off" value = "<?php echo $num;?>">
            <br> =
        <!---Input form--->
    <?php
    /* Calculation */
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        /* Checks if the denominator is equals to 0 when dividing */
        if (preg_match('%^[\d+.-]*?[/]{1,1}[0]*$%', $num)) {
            echo 'Cannot devide by zero';
         /* Checks if there is invalid characters */
        }elseif (preg_match('%^[\d+.-]*?[-+*/]{1,1}[\d+.-]*$%', $num)) {
            $term = 'return ' . $num . ';';
            $res = eval($term);
            if ($res!==false) {
                echo $res;
            } else {
                echo 'Illegal term. Format "numeric_value operator numeric_value"';
            }
            }else {
                echo 'Invalid Characters';
        }
    }
    /* Calculation */
    ?>
    </div>
    <!---Calculator Screen--->
    <!---Menu Buttons--->
    <div class="menu-cartesian">
        <div>
        <a href="..\Case Study Website\cartesian.php" class = "numerical-button" style="font-size: 1.9vw;">Cartesian Plane</a>
        <a href="..\Case Study Website\character2digit.php" class = "numerical-button">Char To Digit</a>
        <a href="..\Case Study Website\calculator.php" class = "numerical-button" style="background-color: #ffe733; color: rgb(0, 0, 0);">Calculator</b></a>
        <a href="..\Case Study Website\numberspell.php" class = "numerical-button">Number Spell</a>
        <input type="submit" id= "submit"  class = "submitbtn">
        </div>
    </div>
     <!---Menu Buttons--->
    </form>
    </body>