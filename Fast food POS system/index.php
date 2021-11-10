<html>
    <head>
        <title>
            Fast food POS System
        </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="..\Fast food POS system\Style.css">
        <script src="../Fast food POS system/script.js"></script>
    </head>
    <body bgcolor="#202124">
    <?php
        /* initialize variables */
        $meal = array();
        $totalprice = null;
        $cash = isset($_POST['cash']) ?$_POST['cash'] : null;

        $smallburgerprice = 4.99;
        $mediumburgerprice = 9.99;
        $largeburgerprice = 14.99;
        $smallfriesprice = 4.99;
        $mediumfriesprice = 9.99;
        $largefriesprice = 14.99;
        $smallcolaprice = 4.99;
        $mediumcolaprice = 9.99;
        $largecolaprice = 14.99;
        $smalljuiceprice= 4.99;
        $mediumjuiceprice = 9.99;
        $largejuiceprice = 14.99;
        $smallwaterprice= 4.99;
        $mediumwaterprice = 9.99;
        $largewaterprice = 14.99;

        $smallburgerquantity = isset($_POST['smallburgerquantity']) ?$_POST['smallburgerquantity'] : null;
        $mediumburgerquantity = isset($_POST['mediumburgerquantity']) ?$_POST['mediumburgerquantity'] : null;
        $largeburgerquantity = isset($_POST['largeburgerquantity']) ?$_POST['largeburgerquantity'] : null;
        $smallfriesquantity = isset($_POST['smallfriesquantity']) ?$_POST['smallfriesquantity'] : null;
        $mediumfriesquantity = isset($_POST['mediumfriesquantity']) ?$_POST['mediumfriesquantity'] : null;
        $largefriesquantity = isset($_POST['largefriesquantity']) ?$_POST['largefriesquantity'] : null;
        $smallcolaquantity= isset($_POST['smallcolaquantity']) ?$_POST['smallcolaquantity'] : null;
        $mediumcolaquantity = isset($_POST['mediumcolaquantity']) ?$_POST['mediumcolaquantity'] : null;
        $largecolaquantity = isset($_POST['largecolaquantity']) ?$_POST['largecolaquantity'] : null;
        $smalljuicequantity= isset($_POST['smalljuicequantity']) ?$_POST['smalljuicequantity'] : null;
        $mediumjuicequantity = isset($_POST['mediumjuicequantity']) ?$_POST['mediumjuicequantity'] : null;
        $largejuicequantity = isset($_POST['largejuicequantity']) ?$_POST['largejuicequantity'] : null;
        $smallwaterquantity= isset($_POST['smallwaterquantity']) ?$_POST['smallwaterquantity'] : null;
        $mediumwaterquantity = isset($_POST['mediumwaterquantity']) ?$_POST['mediumwaterquantity'] : null;
        $largewaterquantity = isset($_POST['largewaterquantity']) ?$_POST['largewaterquantity'] : null;


        $smallburger = isset($_POST['smallburger']) ?$_POST['smallburger'] : null;
        $mediumburger = isset($_POST['mediumburger']) ?$_POST['mediumburger'] : null;
        $largeburger = isset($_POST['largeburger']) ?$_POST['largeburger'] : null;
        $smallfries = isset($_POST['smallfries']) ?$_POST['smallfries'] : null;
        $mediumfries = isset($_POST['mediumfries']) ?$_POST['mediumfries'] : null;
        $largefries = isset($_POST['largefries']) ?$_POST['largefries'] : null;
        $smallcola = isset($_POST['smallcola']) ?$_POST['smallcola'] : null;
        $mediumcola = isset($_POST['mediumcola']) ?$_POST['mediumcola'] : null;
        $largecola = isset($_POST['largecola']) ?$_POST['largecola'] : null;
        $smalljuice= isset($_POST['smalljuice']) ?$_POST['smalljuice'] : null;
        $mediumjuice = isset($_POST['mediumjuice']) ?$_POST['mediumjuice'] : null;
        $largejuice = isset($_POST['largejuice']) ?$_POST['largejuice'] : null;
        $smallwater= isset($_POST['smallwater']) ?$_POST['smallwater'] : null;
        $mediumwater = isset($_POST['mediumwater']) ?$_POST['mediumwater'] : null;
        $largewater = isset($_POST['largewater']) ?$_POST['largewater'] : null;
        /* initialize variables */
    ?>
    <!---Scrollable item tiles---> 
    <div class="Menu_buttons">
    <!---Search bar---> 
     <input id="myInput" type="text" class="search" placeholder="Search..">
     <!---Search bar---> 

     <!---Item tiles---> 
        <div class="buttons">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <!---Burgers---> 
                <input type="checkbox" id="smallburger" name="smallburger" value="Small burger">
                <label for="smallburger" class="checkbox">
                    <img src="../Fast food POS system/Images/smallburger.png" class="picture">
                    <br>
                    Small burger
                    <br>
                    <b>$4.99</b>
                    <br>
                    <button type="button" id="smallburgerplus" class="plusbutton">+</button>
                    <input type="number" id="smallburgerquantity" class = "quantity" name="smallburgerquantity" min="1" value="1" size="2">
                    <button type="button" id="smallburgerminus"  class="minusbutton">-</button>
                </label>
                <input type="checkbox" id="mediumburger" name="mediumburger" value="Medium burger">
                <label for="mediumburger" class="checkbox">
                    <img src="../Fast food POS system/Images/mediumburger.png" class="picture">
                    <br>
                    Medium burger
                    <br>
                    <b>$9.99</b>
                    <br>
                    <button type="button" id="mediumburgerplus" class="plusbutton">+</button>
                    <input type="number" id="mediumburgerquantity" class = "quantity" name="mediumburgerquantity" min="1" value="1">
                    <button type="button" id="mediumburgerminus"  class="minusbutton">-</button>
                </label>
                <input type="checkbox" id="largeburger" name="largeburger" value="Large burger">
                <label for="largeburger" class="checkbox">
                    <img src="../Fast food POS system/Images/largeburger.png" class="picture">
                    <br>
                    Large burger
                    <br>
                    <b>$14.99</b>
                    <br>
                    <button type="button" id="largeburgerplus" class="plusbutton">+</button>
                    <input type="number" id="largeburgerquantity" class = "quantity" name="largeburgerquantity" min="1" value="1">
                    <button type="button" id="largeburgerminus"  class="minusbutton">-</button>
                </label>
                <!---Burgers---> 


                <!---Fries---> 
                <input type="checkbox" id="smallfries" name="smallfries" value="Small fries">
                <label for="smallfries" class="checkbox">
                    <img src="../Fast food POS system/Images/smallfries.png" class="picture">
                    <br>
                    Small Fries
                    <br>
                    <b>$4.99</b>
                    <br>
                    <button type="button" id="smallfriesplus" class="plusbutton">+</button>
                    <input type="number" id="smallfriesquantity" class = "quantity" name="smallfriesquantity" min="1" value="1">
                    <button type="button" id="smallfriesminus"  class="minusbutton">-</button>
                </label>
                <input type="checkbox" id="mediumfries" name="mediumfries" value="Medium fries">
                <label for="mediumfries" class="checkbox">
                    <img src="../Fast food POS system/Images/mediumfries.png" class="picture">
                    <br>
                    Medium Fries
                    <br>
                    <b>$9.99</b>
                    <br>
                    <button type="button" id="mediumfriesplus" class="plusbutton">+</button>
                    <input type="number" id="mediumfriesquantity" class = "quantity" name="mediumfriesquantity" min="1" value="1">
                    <button type="button" id="mediumfriesminus"  class="minusbutton">-</button>
                </label>
                <input type="checkbox" id="largefries" name="largefries" value="Large fries">
                <label for="largefries" class="checkbox">
                    <img src="../Fast food POS system/Images/largefries.png" class="picture">
                    <br>
                    Large Fries
                    <br>
                    <b>$14.99</b>
                    <br>
                    <button type="button" id="largefriesplus" class="plusbutton">+</button>
                    <input type="number" id="largefriesquantity" class = "quantity" name="largefriesquantity" min="1" value="1">
                    <button type="button" id="largefriesminus"  class="minusbutton">-</button>
                </label>
                <!---Fries---> 

                <!---Cola---> 
                <input type="checkbox" id="smallcola" name="smallcola" value="Small cola">
                <label for="smallcola" class="checkbox">
                    <img src="../Fast food POS system/Images/smallcola.png" class="picture">
                    <br>
                    Small cola
                    <br>
                    <b>$4.99</b>
                    <br>
                    <button type="button" id="smallcolaplus" class="plusbutton">+</button>
                    <input type="number" id="smallcolaquantity" class = "quantity" name="smallcolaquantity" min="1" value="1">
                    <button type="button" id="smallcolaminus"  class="minusbutton">-</button>
                </label>
                <input type="checkbox" id="mediumcola" name="mediumcola" value="Medium cola">
                <label for="mediumcola" class="checkbox">
                    <img src="../Fast food POS system/Images/mediumcola.png" class="picture">
                    <br>
                    Medium cola
                    <br>
                    <b>$9.99</b>
                    <br>
                    <button type="button" id="mediumcolaplus" class="plusbutton">+</button>
                    <input type="number" id="mediumcolaquantity" class = "quantity" name="mediumcolaquantity" min="1" value="1">
                    <button type="button" id="mediumcolaminus"  class="minusbutton">-</button>
                </label>
                <input type="checkbox" id="largecola" name="largecola" value="Large cola">
                <label for="largecola" class="checkbox">
                    <img src="../Fast food POS system/Images/largecola.png" class="picture">
                    <br>
                    Large cola
                    <br>
                    <b>$14.99</b>
                    <br>
                    <button type="button" id="largecolaplus" class="plusbutton">+</button>
                    <input type="number" id="largecolaquantity" class = "quantity" name="largecolaquantity" min="1" value="1">
                    <button type="button" id="largecolaminus"  class="minusbutton">-</button>
                </label>
                <!---Cola---> 

                <!---Juice---> 
                <input type="checkbox" id="smalljuice" name="smalljuice" value="Small juice">
                <label for="smalljuice" class="checkbox">
                    <img src="../Fast food POS system/Images/smalljuice.png" class="picture">
                    <br>
                    Small juice
                    <br>
                    <b>$4.99</b>
                    <br>
                    <button type="button" id="smalljuiceplus" class="plusbutton">+</button>
                    <input type="number" id="smalljuicequantity" class = "quantity" name="smalljuicequantity" min="1" value="1">
                    <button type="button" id="smalljuiceminus"  class="minusbutton">-</button>
                </label>
                <input type="checkbox" id="mediumjuice" name="mediumjuice" value="Medium juice">
                <label for="mediumjuice" class="checkbox">
                    <img src="../Fast food POS system/Images/mediumjuice.png" class="picture">
                    <br>
                    Medium juice
                    <br>
                    <b>$9.99</b>
                    <br>
                    <button type="button" id="mediumjuiceplus" class="plusbutton">+</button>
                    <input type="number" id="mediumjuicequantity" class = "quantity" name="mediumjuicequantity" min="1" value="1">
                    <button type="button" id="mediumjuiceminus"  class="minusbutton">-</button>
                </label>
                <input type="checkbox" id="largejuice" name="largejuice" value="Large juice">
                <label for="largejuice" class="checkbox">
                    <img src="../Fast food POS system/Images/largejuice.png" class="picture">
                    <br>
                    Large juice
                    <br>
                    <b>$14.99</b>
                    <br>
                    <button type="button" id="largejuiceplus" class="plusbutton">+</button>
                    <input type="number" id="largejuicequantity" class = "quantity" name="largejuicequantity" min="1" value="1">
                    <button type="button" id="largejuiceminus"  class="minusbutton">-</button>
                </label>
                <!---Juice--->

                <!---Water--->
                <input type="checkbox" id="smallwater" name="smallwater" value="Small water" >
                <label for="smallwater" class="checkbox">
                    <img src="../Fast food POS system/Images/smallwater.png" class="picture">
                    <br>
                    Small water
                    <br>
                    <b>$4.99</b>
                    <br>
                    <button type="button" id="smallwaterplus" class="plusbutton">+</button>
                    <input type="number" id="smallwaterquantity" class = "quantity" name="smallwaterquantity" min="1" value="1">
                    <button type="button" id="smallwaterminus"  class="minusbutton">-</button>
                </label>
                <input type="checkbox" id="mediumwater" name="mediumwater" value="Medium water">
                <label for="mediumwater" class="checkbox">
                    <img src="../Fast food POS system/Images/mediumwater.png" class="picture">
                    <br>
                    Medium water
                    <br>
                    <b>$9.99</b>
                    <br>
                    <button type="button" id="mediumwaterplus" class="plusbutton">+</button>
                    <input type="number" id="mediumwaterquantity" class = "quantity" name="mediumwaterquantity" min="1" value="1">
                    <button type="button" id="mediumwaterminus"  class="minusbutton">-</button>
                </label>
                <input type="checkbox" id="largewater" name="largewater" value="Large water">
                <label for="largewater" class="checkbox">
                    <img src="../Fast food POS system/Images/largewater.png" class="picture">
                    <br>
                    Large water
                    <br>
                    <b>$14.99</b>
                    <br>
                    <button type="button" id="largewaterplus" class="plusbutton">+</button>
                    <input type="number" id="largewaterquantity" class = "quantity" name="largewaterquantity" min="1" value="1">
                    <button type="button" id="largewaterminus"  class="minusbutton">-</button>
                </label>
                <!---Water--->
                <!---Item tiles---> 
                </div>
        </div>
        <!---Scrollable item tiles---> 
            <?php 
                 if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    /* Add items to array */
                        $meal[] = $smallburger;
                        $meal[] = $mediumburger;
                        $meal[] = $largeburger;
                        $meal[] = $smallfries;
                        $meal[] = $mediumfries;
                        $meal[] = $largefries;
                        $meal[] = $smallcola;
                        $meal[] = $mediumcola;
                        $meal[] = $largecola;
                        $meal[] = $smalljuice;
                        $meal[] = $mediumjuice;
                        $meal[] = $largejuice;
                        $meal[] = $smallwater;
                        $meal[] = $mediumwater;
                        $meal[] = $largewater;
                    /* Add items to array */
                }
            ?>
        <!---Order information---> 
        <div class="receipt" style="font-family:monospace; overflow: auto;"> 
        <p class ="title">Fast Food POS System</p>
        <pre style="font-size: 1vw; margin:0%;">QTY   ITEM                          PRICE</pre>
        <div class="order"> 
            <?php 
                /* Counts the items inside the array */
                $arrlength = count($meal);

                /* Loops through the array */
                for($x = 0; $x < $arrlength; $x++) {
                    /* Checks if an index is not empty or null */
                    if($meal[$x] != null){
                        /* If it is not empty or null*/
                        /* Checks if the index is equal to one of the items*/
                        if($meal[$x] == "Small burger"){
                            /* if it is, it prints out the quantity of the item as well as the name of the item*/
                            echo "<p class='item'>x", $smallburgerquantity, " ", $meal[$x];
                            /* it also prints out the price multiplied by the quantity requested by the user*/
                            echo "<p class='itemquantity'>$", ($smallburgerprice * $smallburgerquantity), "</p>";
                            /* and adds it to the total price variable */
                            $totalprice += ($smallburgerprice * $smallburgerquantity);
                        }
                        if($meal[$x] == "Medium burger"){
                            echo "<p class='item'>x", $mediumburgerquantity, " ", $meal[$x];
                            echo "<p class='itemquantity'>$", ($mediumburgerprice * $mediumburgerquantity), "</p>";
                            $totalprice += ($mediumburgerprice * $mediumburgerquantity);
                        }
                        if($meal[$x] == "Large burger"){
                            echo "<p class='item'>x", $largeburgerquantity, " ", $meal[$x];
                            echo "<p class='itemquantity'>$", ($largeburgerprice * $largeburgerquantity), "</p>";
                            $totalprice += ($largeburgerprice * $largeburgerquantity);
                        }
                        if($meal[$x] == "Small fries"){
                            echo "<p class='item'>x", $smallfriesquantity, " ", $meal[$x];
                            echo "<p class='itemquantity'>$", ($smallfriesprice * $smallfriesquantity), "</p>";
                            $totalprice += ($smallfriesprice * $smallfriesquantity);
                        }
                        if($meal[$x] == "Medium fries"){
                            echo "<p class='item'>x", $mediumfriesquantity, " ", $meal[$x];
                            echo "<p class='itemquantity'>$", ($mediumfriesprice * $mediumfriesquantity), "</p>";
                            $totalprice += ($mediumfriesprice * $mediumfriesquantity);
                        }
                        if($meal[$x] == "Large fries"){
                            echo "<p class='item'>x", $largefriesquantity, " ", $meal[$x];
                            echo "<p class='itemquantity'>$", ($largefriesprice * $largefriesquantity), "</p>";
                            $totalprice += ($largefriesprice * $largefriesquantity);
                        }
                        if($meal[$x] == "Small cola"){
                            echo "<p class='item'>x", $smallcolaquantity, " ", $meal[$x];
                            echo "<p class='itemquantity'>$", ($smallcolaprice * $smallcolaquantity), "</p>";
                            $totalprice += ($smallcolaprice * $smallcolaquantity);
                        }
                        if($meal[$x] == "Medium cola"){
                            echo "<p class='item'>x", $mediumcolaquantity, " ", $meal[$x];
                            echo "<p class='itemquantity'>$", ($mediumcolaprice * $mediumcolaquantity), "</p>";
                            $totalprice += ($mediumcolaprice * $mediumcolaquantity);
                        }
                        if($meal[$x] == "Large cola"){
                            echo "<p class='item'>x", $largecolaquantity, " ", $meal[$x];
                            echo "<p class='itemquantity'>$", ($largecolaprice * $largecolaquantity), "</p>";
                            $totalprice += ($largecolaprice * $largecolaquantity);
                        }
                        if($meal[$x] == "Small juice"){
                            echo "<p class='item'>x", $smalljuicequantity, " ", $meal[$x];
                            echo "<p class='itemquantity'>$", ($smalljuiceprice * $smalljuicequantity), "</p>";
                            $totalprice += ($smalljuiceprice * $smalljuicequantity);
                        }
                        if($meal[$x] == "Medium juice"){
                            echo "<p class='item'>x", $mediumjuicequantity, " ", $meal[$x];
                            echo "<p class='itemquantity'>$", ($mediumjuiceprice * $mediumjuicequantity), "</p>";
                            $totalprice += ($mediumjuiceprice * $mediumjuicequantity);
                        }
                        if($meal[$x] == "Large juice"){
                            echo "<p class='item'>x", $largejuicequantity, " ", $meal[$x];
                            echo "<p class='itemquantity'>$", ($largejuiceprice * $largejuicequantity), "</p>";
                            $totalprice += ($largejuiceprice * $largejuicequantity);
                        }
                        if($meal[$x] == "Small water"){
                            echo "<p class='item'>x", $smallwaterquantity, " ", $meal[$x];
                            echo "<p class='itemquantity'>$", ($smallwaterprice * $smallwaterquantity), "</p>";
                            $totalprice += ($smallwaterprice * $smallwaterquantity);
                        }
                        if($meal[$x] == "Medium water"){
                            echo "<p class='item'>x", $mediumwaterquantity, " ", $meal[$x];
                            echo "<p class='itemquantity'>$", ($mediumwaterprice * $mediumwaterquantity), "</p>";
                            $totalprice += ($mediumwaterprice * $mediumwaterquantity);
                        }
                        if($meal[$x] == "Large water"){
                            echo "<p class='item'>x", $largewaterquantity, " ", $meal[$x];
                            echo "<p class='itemquantity'>$", ($largewaterprice * $largewaterquantity), "</p>";
                            $totalprice += ($largewaterprice * $largewaterquantity);
                        }
                        echo "<br>";
                    }  
                }
                /* Loops through the array */           
            ?>
            </div>
            <br>
            <!---Bottom of the order information (buttons and prices)---> 
            <div class="action">
                <?php
                    /* Checks if total price is not equals to null */    
                    if( $totalprice != null){
                    /* If it is, it prints out the total price */
                    echo "<p class='totalprice'>Total: $", $totalprice, "</p>";
                    }
                ?>
                <!---cash input---> 
                <pre class = "Cash" style="margin-left: 42%;">Cash: $<input type="number" id="cash" class = "cash" name="cash" value = "<?php echo $cash;?>" required ></pre>
                <!---cash input---> 
                <?php
                    /* Checks if total price is not equals to null */    
                    if( $totalprice != null){
                        /* If it is, it calculates the change by subtracting the cash from the total price */
                        $change = $cash - $totalprice;
                        /* then checks if the the calculated change is greater than 0 or a positive number*/
                        if( $change > 0){
                            /* If it is, it prints out the calculated change */
                            echo "<p class='totalprice'>Change: $", $change, "</p>";
                        }else{
                             /* If it is not, it prints out an appropriate message */
                            echo "<p class='totalprice'>Change: Cash is not enough</p>";
                        }
                        /* and it prints out the calculated change */
                        
                        echo "<hr style='border-top: dashed' />";
                    }
                ?>
                <!---Reset button for erasing a session and a submit button for executing a transation--->
                <input type="reset" id= "reset" class="reset" value="reset"><input type="submit" id= "submit" class="submit">
                <!---Reset button for erasing a session and a submit button for executing a transation--->

            </div>
            <!---Bottom of the order information (buttons and prices)--->       
        </div>
        </form>
        <!---Order information---> 
    </body>
</html>