<html>
    <head>
        <title>
            Unit Converter
        </title>
    <link rel="stylesheet" href="..\unit Converter Website\style.css">
    </head>
    <body style = "margin:0px; background-color:#8cd43f;">
    <?php 
        $pounds= isset($_POST['pounds']) ?$_POST['pounds'] : '0';
        $grams= isset($_POST['grams']) ?$_POST['grams'] : '0'; 
    ?>
    <a href="..\Unit Converter Website\index.php" class="back">back</a>
    <div class = "answer-box">
        <form method="post" class = "center" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <input type="number" name="pounds" class = "input" style = "background-color:#8cd43f;" value = "<?php echo $pounds;?>"> pounds is equivalent to
        </form>
        <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($pounds)) {
                $grams= isset($_POST['grams']) ?$_POST['grams'] : '0'; 
            }else{
                $grams= ($pounds * 454);
            }  
        }
        ?>
        <?php 
         if ($grams > 1){
            echo "<p class = \"center\">$grams grams</p>";
         }else{
            echo "<p class = \"center\">$grams gram</p>";
         }
        ?>
    </div>
    </body>
</html> 