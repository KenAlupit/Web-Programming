
$(document).ready(function(){
    //Hides the quantity input
    $('#smallburgerquantity').hide();
    $('#mediumburgerquantity').hide();
    $('#largeburgerquantity').hide();
    $('#smallfriesquantity').hide();
    $('#mediumfriesquantity').hide();
    $('#largefriesquantity').hide();
    $('#smallcolaquantity').hide();
    $('#mediumcolaquantity').hide();
    $('#largecolaquantity').hide();
    $('#smalljuicequantity').hide();
    $('#mediumjuicequantity').hide();
    $('#largejuicequantity').hide();
    $('#smallwaterquantity').hide();
    $('#mediumwaterquantity').hide();
    $('#largewaterquantity').hide();

    $('#smallburgerplus').hide();
    $('#smallburgerminus').hide();
    $('#mediumburgerplus').hide();
    $('#mediumburgerminus').hide();
    $('#largeburgerplus').hide();
    $('#largeburgerminus').hide();
    $('#smallfriesplus').hide();
    $('#smallfriesminus').hide();
    $('#mediumfriesplus').hide();
    $('#mediumfriesminus').hide();
    $('#largefriesplus').hide();
    $('#largefriesminus').hide();
    $('#smallcolaplus').hide();
    $('#smallcolaminus').hide();
    $('#mediumcolaplus').hide();
    $('#mediumcolaminus').hide();
    $('#largecolaplus').hide();
    $('#largecolaminus').hide();
    $('#smalljuiceplus').hide();
    $('#smalljuiceminus').hide();
    $('#mediumjuiceplus').hide();
    $('#mediumjuiceminus').hide();
    $('#largejuiceplus').hide();
    $('#largejuiceminus').hide();
    $('#smallwaterplus').hide();
    $('#smallwaterminus').hide();
    $('#mediumwaterplus').hide();
    $('#mediumwaterminus').hide();
    $('#largewaterplus').hide();
    $('#largewaterminus').hide();
    //Hides the quantity inputs

    //If an item is clicked
    $('#smallburger').click(function(){
        //Gets the value of the quantity input
        var currentqty = $('#smallburgerquantity').val();
        //Checks if quantity is equal to 1
        if(currentqty == 1){
            //if it is, it disables the minus button
            $("#smallburgerminus").attr("disabled", "disabled");
        }
        //toggles the quantity input
        $('#smallburgerquantity').toggle();
        $('#smallburgerplus').toggle();
        $('#smallburgerminus').toggle();
    });
    //If the plus button is clicked
    $('#smallburgerplus').click(function(){
        //Gets the value of the quantity input
        var currentqty = $('#smallburgerquantity').val();
        //converts the quantity input into a interger then adds 1 into it
        var newqty = parseInt(currentqty) + 1;
        //Checks if the new computed quantity is greater than 1
        if(newqty > 1){
            //if it is, it enables back the minus button
            $("#smallburgerminus").removeAttr("disabled", "disabled");
        }
        //then changes the value of the quantity input into the new computer quantity
        $('#smallburgerquantity').val(newqty);
    });
    //If the minus button is clicked
    $('#smallburgerminus').click(function(){
        //Gets the value of the quantity input
        var currentqty = $('#smallburgerquantity').val();
        //converts the quantity input into a interger then subtracts 1 into it
        var newqty = parseInt(currentqty) - 1;
        //Checks if the new computed quantity is equal to 1
        if(newqty == 1){
             //if it is, it disables the minus button
            $("#smallburgerminus").attr("disabled", "disabled");
        }
        //Checks if the new computed quantity is equal to 0
        if(newqty > 0){
            //then changes the value of the quantity input into the new computer quantity
            $('#smallburgerquantity').val(newqty);
        }
    });

    $('#mediumburger').click(function(){
        var currentqty = $('#mediumburgerquantity').val();
        if(currentqty == 1){
            $("#mediumburgerminus").attr("disabled", "disabled");
        }
        $('#mediumburgerquantity').toggle();
        $('#mediumburgerplus').toggle();
        $('#mediumburgerminus').toggle();
    });
    $('#mediumburgerplus').click(function(){
        var currentqty = $('#mediumburgerquantity').val();
        var newqty = parseInt(currentqty) + 1;
        if(newqty > 1){
            $("#mediumburgerminus").removeAttr("disabled", "disabled");
        }
        $('#mediumburgerquantity').val(newqty);
    });
    $('#mediumburgerminus').click(function(){
        var currentqty = $('#mediumburgerquantity').val();
        var newqty = parseInt(currentqty) - 1;
        if(newqty == 1){
            $("#mediumburgerminus").attr("disabled", "disabled");
        }
        if(newqty > 0){
            $('#mediumburgerquantity').val(newqty);
        }
    });

    $('#largeburger').click(function(){
        var currentqty = $('#largeburgerquantity').val();
        if(currentqty == 1){
            $("#largeburgerminus").attr("disabled", "disabled");
        }
        $('#largeburgerquantity').toggle();
        $('#largeburgerplus').toggle();
        $('#largeburgerminus').toggle();
    });
    $('#largeburgerplus').click(function(){
        var currentqty = $('#largeburgerquantity').val();
        var newqty = parseInt(currentqty) + 1;
        if(newqty > 1){
            $("#largeburgerminus").removeAttr("disabled", "disabled");
        }
        $('#largeburgerquantity').val(newqty);
    });
    $('#largeburgerminus').click(function(){
        var currentqty = $('#largeburgerquantity').val();
        var newqty = parseInt(currentqty) - 1;
        if(newqty == 1){
            $("#largeburgerminus").attr("disabled", "disabled");
        }
        if(newqty > 0){
            $('#largeburgerquantity').val(newqty);
        }
    });

    $('#smallfries').click(function(){
        var currentqty = $('#smallfriesquantity').val();
        if(currentqty == 1){
            $("#smallfriesminus").attr("disabled", "disabled");
        }
        $('#smallfriesquantity').toggle();
        $('#smallfriesplus').toggle();
        $('#smallfriesminus').toggle();
    });
    $('#smallfriesplus').click(function(){
        var currentqty = $('#smallfriesquantity').val();
        var newqty = parseInt(currentqty) + 1;
        if(newqty > 1){
            $("#smallfriesminus").removeAttr("disabled", "disabled");
        }
        $('#smallfriesquantity').val(newqty);
    });
    $('#smallfriesminus').click(function(){
        var currentqty = $('#smallfriesquantity').val();
        var newqty = parseInt(currentqty) - 1;
        if(newqty == 1){
            $("#smallfriesminus").attr("disabled", "disabled");
        }
        if(newqty > 0){
            $('#smallfriesquantity').val(newqty);
        }
    });

    $('#mediumfries').click(function(){
        var currentqty = $('#mediumfriesquantity').val();
        if(currentqty == 1){
            $("#mediumfriesminus").attr("disabled", "disabled");
        }
        $('#mediumfriesquantity').toggle();
        $('#mediumfriesplus').toggle();
        $('#mediumfriesminus').toggle();
    });
    $('#mediumfriesplus').click(function(){
        var currentqty = $('#mediumfriesquantity').val();
        var newqty = parseInt(currentqty) + 1;
        if(newqty > 1){
            $("#mediumfriesminus").removeAttr("disabled", "disabled");
        }
        $('#mediumfriesquantity').val(newqty);
    });
    $('#mediumfriesminus').click(function(){
        var currentqty = $('#mediumfriesquantity').val();
        var newqty = parseInt(currentqty) - 1;
        if(newqty == 1){
            $("#mediumfriesminus").attr("disabled", "disabled");
        }
        if(newqty > 0){
            $('#mediumfriesquantity').val(newqty);
        }
    });

    $('#largefries').click(function(){
        var currentqty = $('#largefriesquantity').val();
        if(currentqty == 1){
            $("#largefriesminus").attr("disabled", "disabled");
        }
        $('#largefriesquantity').toggle();
        $('#largefriesplus').toggle();
        $('#largefriesminus').toggle();
    });
    $('#largefriesplus').click(function(){
        var currentqty = $('#largefriesquantity').val();
        var newqty = parseInt(currentqty) + 1;
        if(newqty > 1){
            $("#largefriesminus").removeAttr("disabled", "disabled");
        }
        $('#largefriesquantity').val(newqty);
    });
    $('#largefriesminus').click(function(){
        var currentqty = $('#largefriesquantity').val();
        var newqty = parseInt(currentqty) - 1;
        if(newqty == 1){
            $("#largefriesminus").attr("disabled", "disabled");
        }
        if(newqty > 0){
            $('#largefriesquantity').val(newqty);
        }
    });

    $('#smallcola').click(function(){
        var currentqty = $('#smallcolaquantity').val();
        if(currentqty == 1){
            $("#smallcolaminus").attr("disabled", "disabled");
        }
        $('#smallcolaquantity').toggle();
        $('#smallcolaplus').toggle();
        $('#smallcolaminus').toggle();
    });
    $('#smallcolaplus').click(function(){
        var currentqty = $('#smallcolaquantity').val();
        var newqty = parseInt(currentqty) + 1;
        if(newqty > 1){
            $("#smallcolaminus").removeAttr("disabled", "disabled");
        }
        $('#smallcolaquantity').val(newqty);
    });
    $('#smallcolaminus').click(function(){
        var currentqty = $('#smallcolaquantity').val();
        var newqty = parseInt(currentqty) - 1;
        if(newqty == 1){
            $("#smallcolaminus").attr("disabled", "disabled");
        }
        if(newqty > 0){
            $('#smallcolaquantity').val(newqty);
        }
    });

    $('#mediumcola').click(function(){
        var currentqty = $('#mediumcolaquantity').val();
        if(currentqty == 1){
            $("#mediumcolaminus").attr("disabled", "disabled");
        }
        $('#mediumcolaquantity').toggle();
        $('#mediumcolaplus').toggle();
        $('#mediumcolaminus').toggle();
    });
    $('#mediumcolaplus').click(function(){
        var currentqty = $('#mediumcolaquantity').val();
        var newqty = parseInt(currentqty) + 1;
        if(newqty > 1){
            $("#mediumcolaminus").removeAttr("disabled", "disabled");
        }
        $('#mediumcolaquantity').val(newqty);
    });
    $('#mediumcolaminus').click(function(){
        var currentqty = $('#mediumcolaquantity').val();
        var newqty = parseInt(currentqty) - 1;
        if(newqty == 1){
            $("#mediumcolaminus").attr("disabled", "disabled");
        }
        if(newqty > 0){
            $('#mediumcolaquantity').val(newqty);
        }
    });


    $('#largecola').click(function(){
        var currentqty = $('#largecolaquantity').val();
        if(currentqty == 1){
            $("#largecolaminus").attr("disabled", "disabled");
        }
        $('#largecolaquantity').toggle();
        $('#largecolaplus').toggle();
        $('#largecolaminus').toggle();
    });
    $('#largecolaplus').click(function(){
        var currentqty = $('#largecolaquantity').val();
        var newqty = parseInt(currentqty) + 1;
        if(newqty > 1){
            $("#largecolaminus").removeAttr("disabled", "disabled");
        }
        $('#largecolaquantity').val(newqty);
    });
    $('#largecolaminus').click(function(){
        var currentqty = $('#largecolaquantity').val();
        var newqty = parseInt(currentqty) - 1;
        if(newqty == 1){
            $("#largecolaminus").attr("disabled", "disabled");
        }
        if(newqty > 0){
            $('#largecolaquantity').val(newqty);
        }
    });


    $('#smalljuice').click(function(){
        var currentqty = $('#smalljuicequantity').val();
        if(currentqty == 1){
            $("#smalljuiceminus").attr("disabled", "disabled");
        }
        $('#smalljuicequantity').toggle();
        $('#smalljuiceplus').toggle();
        $('#smalljuiceminus').toggle();
    });
    $('#smalljuiceplus').click(function(){
        var currentqty = $('#smalljuicequantity').val();
        var newqty = parseInt(currentqty) + 1;
        if(newqty > 1){
            $("#smalljuiceminus").removeAttr("disabled", "disabled");
        }
        $('#smalljuicequantity').val(newqty);
    });
    $('#smalljuiceminus').click(function(){
        var currentqty = $('#smalljuicequantity').val();
        var newqty = parseInt(currentqty) - 1;
        if(newqty == 1){
            $("#smalljuiceminus").attr("disabled", "disabled");
        }
        if(newqty > 0){
            $('#smalljuicequantity').val(newqty);
        }
    });

    
    $('#mediumjuice').click(function(){
        var currentqty = $('#mediumjuicequantity').val();
        if(currentqty == 1){
            $("#mediumjuiceminus").attr("disabled", "disabled");
        }
        $('#mediumjuicequantity').toggle();
        $('#mediumjuiceplus').toggle();
        $('#mediumjuiceminus').toggle();
    });
    $('#mediumjuiceplus').click(function(){
        var currentqty = $('#mediumjuicequantity').val();
        var newqty = parseInt(currentqty) + 1;
        if(newqty > 1){
            $("#mediumjuiceminus").removeAttr("disabled", "disabled");
        }
        $('#mediumjuicequantity').val(newqty);
    });
    $('#mediumjuiceminus').click(function(){
        var currentqty = $('#mediumjuicequantity').val();
        var newqty = parseInt(currentqty) - 1;
        if(newqty == 1){
            $("#mediumjuiceminus").attr("disabled", "disabled");
        }
        if(newqty > 0){
            $('#mediumjuicequantity').val(newqty);
        }
    });


    $('#largejuice').click(function(){
        var currentqty = $('#largejuicequantity').val();
        if(currentqty == 1){
            $("#largejuiceminus").attr("disabled", "disabled");
        }
        $('#largejuicequantity').toggle();
        $('#largejuiceplus').toggle();
        $('#largejuiceminus').toggle();
    });
    $('#largejuiceplus').click(function(){
        var currentqty = $('#largejuicequantity').val();
        var newqty = parseInt(currentqty) + 1;
        if(newqty > 1){
            $("#largejuiceminus").removeAttr("disabled", "disabled");
        }
        $('#largejuicequantity').val(newqty);
    });
    $('#largejuiceminus').click(function(){
        var currentqty = $('#largejuicequantity').val();
        var newqty = parseInt(currentqty) - 1;
        if(newqty == 1){
            $("#largejuiceminus").attr("disabled", "disabled");
        }
        if(newqty > 0){
            $('#largejuicequantity').val(newqty);
        }
    });


    $('#smallwater').click(function(){
        var currentqty = $('#smallwaterquantity').val();
        if(currentqty == 1){
            $("#smallwaterminus").attr("disabled", "disabled");
        }
        $('#smallwaterquantity').toggle();
        $('#smallwaterplus').toggle();
        $('#smallwaterminus').toggle();
    });
    $('#smallwaterplus').click(function(){
        var currentqty = $('#smallwaterquantity').val();
        var newqty = parseInt(currentqty) + 1;
        if(newqty > 1){
            $("#smallwaterminus").removeAttr("disabled", "disabled");
        }
        $('#smallwaterquantity').val(newqty);
    });
    $('#smallwaterminus').click(function(){
        var currentqty = $('#smallwaterquantity').val();
        var newqty = parseInt(currentqty) - 1;
        if(newqty == 1){
            $("#smallwaterminus").attr("disabled", "disabled");
        }
        if(newqty > 0){
            $('#smallwaterquantity').val(newqty);
        }
    });


    $('#mediumwater').click(function(){
        var currentqty = $('#mediumwaterquantity').val();
        if(currentqty == 1){
            $("#mediumwaterminus").attr("disabled", "disabled");
        }
        $('#mediumwaterquantity').toggle();
        $('#mediumwaterplus').toggle();
        $('#mediumwaterminus').toggle();
    });
    $('#mediumwaterplus').click(function(){
        var currentqty = $('#mediumwaterquantity').val();
        var newqty = parseInt(currentqty) + 1;
        if(newqty > 1){
            $("#mediumwaterminus").removeAttr("disabled", "disabled");
        }
        $('#mediumwaterquantity').val(newqty);
    });
    $('#mediumwaterminus').click(function(){
        var currentqty = $('#mediumwaterquantity').val();
        var newqty = parseInt(currentqty) - 1;
        if(newqty == 1){
            $("#mediumwaterminus").attr("disabled", "disabled");
        }
        if(newqty > 0){
            $('#mediumwaterquantity').val(newqty);
        }
    });


    $('#largewater').click(function(){
        var currentqty = $('#largewaterquantity').val();
        if(currentqty == 1){
            $("#largewaterminus").attr("disabled", "disabled");
        }
        $('#largewaterquantity').toggle();
        $('#largewaterplus').toggle();
        $('#largewaterminus').toggle();
    });
    $('#largewaterplus').click(function(){
        var currentqty = $('#largewaterquantity').val();
        var newqty = parseInt(currentqty) + 1;
        if(newqty > 1){
            $("#largewaterminus").removeAttr("disabled", "disabled");
        }
        $('#largewaterquantity').val(newqty);
    });
    $('#largewaterminus').click(function(){
        var currentqty = $('#largewaterquantity').val();
        var newqty = parseInt(currentqty) - 1;
        if(newqty == 1){
            $("#largewaterminus").attr("disabled", "disabled");
        }
        if(newqty > 0){
            $('#largewaterquantity').val(newqty);
        }
    });
    //Search function
    $("#myInput").on("keyup", function() {
        //Converts the input into lower case
        var value = $("#myInput").val().toLowerCase();
        //then filters out the item tile names based on the input
            $(".checkbox").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    //Reset function
    $('#reset').click(function(){
        //Refreshes the page
        location.reload();
        //then clicks the submit button
        $('#submit').click();
    });
});