<html>
    <head>
        <title>
            Unit Converter
        </title>
    <link rel="stylesheet" href="..\unit Converter Website\style.css">
    </head>
    <body style = "margin:0px; background-color:#fadb41;">
    <?php 
        $number= isset($_POST['number']) ?$_POST['number'] : '0';
        $double= isset($_POST['double']) ?$_POST['double'] : '0'; 
        $square= isset($_POST['square']) ?$_POST['square'] : '0'; 
        $half= isset($_POST['half']) ?$_POST['half'] : '0';
    ?>
    <a href="..\Unit Converter Website\index.php" class="back">back</a>
    <div class = "answer-box">
        <form method="post" class = "center" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <input type="number" name="number" class = "input" style = "background-color:#fadb41;" value = "<?php echo $number;?>"> is equivalent to
        </form>
        <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($number)) {
                $double= isset($_POST['double']) ?$_POST['double'] : '0'; 
                $square= isset($_POST['square']) ?$_POST['square'] : '0'; 
                $half= isset($_POST['half']) ?$_POST['half'] : '0';
            }
            else{
                $double= ($number * 2);
                $square= pow($number, 2);
                $half= ($number / 2); 
            }
              
        }
        ?>
        <?php
                echo "<p class = \"center\">$double when doubled</p>";
                echo "<p class = \"center\">$square when squared</p>";
                echo "<p class = \"center\">$half when halfed</p>";
        ?>
    </div>
    </body>
</html> 