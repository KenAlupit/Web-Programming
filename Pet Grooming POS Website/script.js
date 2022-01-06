function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.profilepic')
                .attr('src', e.target.result)
                .width(480)
                .height(480);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
$(document).ready(function(){
    var html = '<div class="input-group mb-3" id="wrapper" style="font-family: petfont;"><div class="input-group-prepend"><label class="input-group-text" for="inputGroupSelect01" style="font-size: 2vh;">Options</label></div><select class="custom-select" id="Service" name="Service[]" style="font-size: 2vh; height: 5vh;"><optgroup label = "Choose One"><option value="Bathing">Bathing</option><option value="Clipping">Clipping</option><optgroup label = "Extra Services"><option value="Blueberry Facial">Blueberry Facial</option><option value="Pad & Paw Treatment">Pad & Paw Treatment</option><option value="Two Step Dental">Two Step Dental</option><option value="Sanitary Cut">Sanitary Cut</option><option value="Flea Bath & Tick Removal">Flea Bath & Tick Removal</option><option value="Ear Cleaning/Hair Removal">Ear Cleaning/Hair Removal</option><option value="Nail Grinding">Nail Grinding</option><option value="Nail Polish">Nail Polish</option><option value="Teeth Brushing">Teeth Brushing</option><option value="De Shedding Treatment">De Shedding TreatmentAudi</option><optgroup label = "Cats & Kittens"><option value="Bathing Package">Bathing Package</option><option value="Lion Clip">Lion Clip</option><option value="Full Groom Package">Full Groom Package</option><option value="Sanitary Clip">Sanitary Clip</option></select><div class="input-group-prepend"><span class="input-group-text" style="font-size: 2vh;">$</span></div><input type="text" class="form-control" name= "Price[]" placeholder="Price" aria-label="Amount (to the nearest dollar)" style="font-size: 2vh;" required><button type="button" class="btn btn-success" id="minus" style="margin-left:1%; background-color: #00cc99;">-</button></div>';
    $("#plus").click(function(){
        $("#wrapper").after(html);
      });
    $(document).on('click', '#minus', function(){
        $(this).parent('div').remove();
    });
    $("#reset").click(function(){
        location.reload();
        $('#submit').click();
    });
});
