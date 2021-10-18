<html>
    <head>
        <title>
            Unit Converter
        </title>
        <link rel="stylesheet" href="..\Unit Converter Website\style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function(){
                $('#miles').click(function(){
                    $('.text').fadeOut();
                    $('#miles').animate({height:'300%', width:'300%'}, 500, function(){
                        $('#centi').hide();
                        $('#pounds').hide();
                        $('#double').hide();
                        $('#pint').hide();
                        $('#logo').hide();
                        window.location.href="../Unit Converter Website/distance.php";
                    });
                });
                $('#centi').click(function(){
                    $('.text').fadeOut();
                    $('#miles').hide();
                    $('#centi').animate({height:'300%', width:'300%'}, 500, function(){
                        $('#pounds').hide();
                        $('#double').hide();
                        $('#pint').hide();
                        $('#logo').hide();
                        $('#miles').hide();
                        window.location.href="../Unit Converter Website/measurement.php";

                    });
                });
                $('#pounds').click(function(){
                    $('.text').fadeOut();
                    $('#pounds').animate({height:'1000%'}, 500, function(){
                        $('#pounds').animate({width:'1000%'}, 500, function(){
                        $('#miles').hide();
                        $('#centi').hide();
                        $('#double').hide();
                        $('#pint').hide();
                        $('#logo').hide();
                        window.location.href="../Unit Converter Website/weight.php";
                    });
                });
                });
                $('#double').click(function(){
                    $('.text').fadeOut();
                    $('#double').animate({height:'1000%'}, 400, function(){
                        $('#double').animate({width:'1000%'}, 400, function(){
                        $('#miles').hide();
                        $('#centi').hide();
                        $('#pounds').hide();
                        $('#pint').hide();
                        $('#logo').hide();
                        window.location.href="../Unit Converter Website/number.php";
                    });
                });
                });
                $('#pint').click(function(){
                    $('.text').fadeOut();
                    $('#pint').animate({width:'1000%',height:'1000%'}, 500, function(){
                        $('#miles').hide();
                        $('#centi').hide();
                        $('#pounds').hide();
                        $('#double').hide();
                        $('#logo').hide();
                        window.location.href="../Unit Converter Website/pint.php";
                    });
                });
            });
        </script>
    </head>
    <body style = "margin:0px; overflow:hidden;">
        <div class = "frame">
            <div id="miles"  class="menu-button-left"  style="background-color:#56bffc;"><p class ="text">Miles To Kilometers</p></div>
            <div id="centi" class="menu-button-right" style="background-color:#e85538;"><p class ="text">Centimeters To Feet And Inches</p></div>
            <div id="pounds" class="menu-button-left" style="background-color:#8cd43f;"><p class ="text">Pounds To Grams</p></div>
            <div id="double" class="menu-button-right" style="background-color:#fadb41;"><p class ="text">Get Double, Square, And Half</p></div>
            <div id="pint" class="menu-button-left" style="background-color:gray;"><p class ="text">Pint To Gill, Quarts, And Gallon</p></div>
            <div class = "logo-box" id="logo"><h1 class="text">Unit <br> Converter</h1></div>  
        </div>   
    </body>
</html> 