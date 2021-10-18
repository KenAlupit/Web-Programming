<html>
    <head>
        <title>
            Unit Converter
        </title>
    <link rel="stylesheet" href="..\unit Converter Website\style.css">
    </head>
    <body style = "margin:0px; background-color:#56bffc;">
    <?php 
    $miles= isset($_POST['miles']) ?$_POST['miles'] : '0'; 
    $kilometers= isset($_POST['kilometers']) ?$_POST['kilometers'] : '0'; 
    ?>
    <a href="..\Unit Converter Website\index.php" class="back">back</a>
    <div class = "answer-box">
        <form method="post" class = "center" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <input type="number" name="miles" class = "input" style = "background-color:#56bffc;"value = "<?php echo $miles;?>"> miles <br> is equivalent to
        </form>
        <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($miles)) {
              $kilometers= isset($_POST['kilometers']) ?$_POST['kilometers'] : '0';
            }else{
              $kilometers= ($miles * 1.609);
            }
              
        }
        ?>
        <?php 
        if ($kilometers > 1){
          echo "<p class = \"center\">$kilometers kilometers</p>";
        }else{
          echo "<p class = \"center\">$kilometers kilometer</p>";
        }
        ?>
      </div>
    </body>
</html> 