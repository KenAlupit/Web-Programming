<html>
    <head>
        <title>
            Cartesian Plane
        </title>
        <link rel="stylesheet" href="..\case Study Website\style.css">    
    </head>
    <body background = "..\Case Study Website\Images\background1.jpg">
    <!---Title---> 
    <div>
        <a href="..\Case Study Website\index.php" class = "title" style="margin-bottom: 0%; color:white; text-decoration: none;">Case Study</a>
        <p class = "title" style="font-size: 1.5vw; padding-left:2%;">Cartesian Plane</p>
    </div>
    <!---Title--->
    <!---Calculator Screen--->
    <div class = "screen">
    <?php
        /* initialize variables */
        $Xcoordinate = isset($_POST['x-coordinate']) ?$_POST['x-coordinate'] : ''; 
        $Ycoordinate = isset($_POST['y-coordinate']) ?$_POST['y-coordinate'] : ''; 
        /* initialize variables */
    ?>
        <!---Input form--->
        <form method="post" class="input-text" style="padding-top:19%;" action="<?php echo $_SERVER['PHP_SELF'];?>">
                input the coordinate (
                <input type="number" id="code" class ="input" name="x-coordinate" value = "<?php echo $Xcoordinate;?>">
                ,
                <input type="number" id="code" class ="input" name="y-coordinate" value = "<?php echo $Ycoordinate;?>">
                )
        <!---Input form--->
        <?php
            /* Calculation */
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                /* Checks if coordinates are in the Origin point (0,+-), y-axis*/
                if($Xcoordinate == 0 and ($Ycoordinate > 0 or $Ycoordinate < 0)){
                    echo "<p class= \"input-text\">Origin Point, Y axis</p>";
                }
                /* Checks if coordinates are in the Origin point (+-,0) */
                elseif($Ycoordinate == 0 and ($Xcoordinate > 0 or $Xcoordinate < 0)){
                    echo "<p class= \"input-text\">Origin Point, X axis</p>";
                }
                /* Checks if coordinates are in the Origin point (0,0) */
                elseif($Xcoordinate == 0 or $Ycoordinate == 0){
                    echo "<p class= \"input-text\">Origin Point</p>";
                }
                /* Checks if coordinates are in the Quadrant I (+,+) */
                elseif($Xcoordinate > 0 and $Ycoordinate > 0){
                    echo "<p class= \"input-text\">Quadrant I</p>";
                }
                /* Checks if coordinates are in the Quadrant II (-,+) */
                elseif($Xcoordinate < 0 and $Ycoordinate > 0){
                    echo "<p class= \"input-text\">Quadrant II</p>";
                }
                /* Checks if coordinates are in the Quadrant III (-,-) */
                elseif($Xcoordinate < 0 and $Ycoordinate < 0){
                    echo "<p class= \"input-text\">Quadrant III</p>";
                }
                /* Checks if coordinates are in the Quadrant IV (+,-) */
                elseif($Xcoordinate > 0 and $Ycoordinate < 0){
                    echo "<p class= \"input-text\">Quadrant IV</p>";
                }
            }
            /* Calculation */
        ?>
    </div>
     <!---Calculator Screen--->
    <!---Menu Buttons--->
    <div class="menu-cartesian">
        <a href="..\Case Study Website\cartesian.php" class = "numerical-button" style="font-size: 1.9vw; background-color: #ffe733; color: rgb(0, 0, 0);">Cartesian Plane</a>
        <a href="..\Case Study Website\character2digit.php" class = "numerical-button">Char To Digit</a>
        <a href="..\Case Study Website\calculator.php" class = "numerical-button">Calculator</b></a>
        <a href="..\Case Study Website\numberspell.php" class = "numerical-button">Number Spell</a>
        <input type="submit" id= "submit"  class = "submitbtn">
        </div>
    </div>
    <!---Menu Buttons--->
    </form>
    </body>