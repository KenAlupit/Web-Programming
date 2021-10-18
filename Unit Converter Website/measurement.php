<html>
    <head>
        <title>
            Unit Converter
        </title>
    <link rel="stylesheet" href="..\unit Converter Website\style.css">
    </head>
    <body style = "margin:0px; background-color:#e85538;">
    <?php 
        $centimeter= isset($_POST['centimeter']) ?$_POST['centimeter'] : '0'; 
        $feet= isset($_POST['feet']) ?$_POST['feet'] : '0'; 
        $inches= isset($_POST['inches']) ?$_POST['inches'] : '0'; 
    ?>
    <a href="..\Unit Converter Website\index.php" class="back">back</a>
    <div class = "answer-box">
        <form method="post" class = "center" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <input type="number" name="centimeter" class = "input"  style = "background-color:#e85538;" value = "<?php echo $centimeter;?>"> centimeters <br> is equivalent to 
        </form>
        <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($centimeter)) {
                $feet= isset($_POST['feet']) ?$_POST['feet'] : '0'; 
                $inches= isset($_POST['inches']) ?$_POST['inches'] : '0'; 
            }else{
                $feet= ($centimeter / 30.48);
                $inches= ($centimeter / 2.54); 
            }

        }
        ?>
        <?php
        if ($feet > 1){ 
            echo "<p class = \"center\">$feet feet,</p>";
        }
        else{
            echo "<p class = \"center\">$feet foot,</p>";
        }
        if ($inches > 1){
            echo "<p class = \"center\">$inches inches</p>";
        }
        else{
            echo "<p class = \"center\">$inches inch</p>";
        }
        ?>
    </div>
    </body>
</html> 