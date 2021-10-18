<html>
    <head>
        <title>
            Unit Converter
        </title>
    <link rel="stylesheet" href="..\unit Converter Website\style.css">
    </head>
    <body style = "margin:0px; background-color:gray;">
    <?php 
        $pint= isset($_POST['pint']) ?$_POST['pint'] : '0';
        $gill= isset($_POST['gill']) ?$_POST['gill'] : '0'; 
        $quarts= isset($_POST['quarts']) ?$_POST['quarts'] : '0'; 
        $gallon= isset($_POST['gallon']) ?$_POST['gallon'] : '0';
    ?>
    <a href="..\Unit Converter Website\index.php" class="back">back</a>
    <div class = "answer-box">
        <form method="post" class = "center" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <input type="text" name="pint" class = "input" style = "background-color:gray;" value = "<?php echo $pint;?>"> pint is equivalent to
        </form>
        <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($pint)) {
                $gill= isset($_POST['gill']) ?$_POST['gill'] : '0'; 
                $quarts= isset($_POST['quarts']) ?$_POST['quarts'] : '0'; 
                $gallon= isset($_POST['gallon']) ?$_POST['gallon'] : '0';
            }
            else{
              $gill= ($pint * 4);
              $quarts= ($pint / 2);
              $gallon= ($pint / 8);
            }
        }
        ?>
        <?php 
        if ($gill > 1){
            echo "<p class = \"center\">$gill gills</p>";
        }else{
            echo "<p class = \"center\">$gill gill</p>";
        }
        ?>
         
        <?php 
        if ($quarts > 1){
            echo "<p class = \"center\">$quarts quarts</p>";
        }else{
            echo "<p class = \"center\">$quarts quart</p>";
        }
        ?>

        <?php 
        if ($gallon > 1){
            echo "<p class = \"center\">$gallon gallons</p>";
        }else{
            echo "<p class = \"center\">$gallon gallon</p>";
        }
        ?>
        </div>
    </body>
</html> 