<html>
    <head>
        <title>
            Pet Grooming POS
        </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="..\Pet Grooming POS Website\style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="..\Pet Grooming POS Website\script.js"></script>
    </head>
    <body background="..\Pet Grooming POS Website\Images\background.jpg" style="font-family: petfont;">
    <?php 
        $firstname = isset($_POST['firstname']) ?$_POST['firstname'] : "N/A";
        $middlename = isset($_POST['middlename']) ?$_POST['middlename'] : null;
        $lastname = isset($_POST['lastname']) ?$_POST['lastname'] : null;
        $phone = isset($_POST['phone']) ?$_POST['phone'] : null;
        $email = isset($_POST['email']) ?$_POST['email'] : null;
        $petsname = isset($_POST['petsname']) ?$_POST['petsname'] : null;
        $petspecies = isset($_POST['Petspecies']) ?$_POST['Petspecies'] : null;
        $petgender = isset($_POST['Gender']) ?$_POST['Gender'] : null;
        $weight = isset($_POST['weight']) ?$_POST['weight'] : null;
        $furcolor = isset($_POST['furcolor']) ?$_POST['furcolor'] :null;
        $breed = isset($_POST['breed']) ?$_POST['breed'] :null;
        $extra = isset($_POST['extra']) ?$_POST['extra'] : "N/A";
        $service = isset($_POST['Service']) ?$_POST['Service'] : null;
        $price = isset($_POST['Price']) ?$_POST['Price'] : null;
        $cash = isset($_POST['cash']) ?$_POST['cash'] : null;
        $total = null;
        $change = null;
    ?>
    <nav class="navbar" style="background-color: #00cc99; margin-bottom:1%;">
        <a class="navbar-brand" href="#">
            <img src="..\Pet Grooming POS Website\Images\paw.png" height="auto" width="32vh" alt="" >
        </a>
    </nav>
    <div class="order">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" id="mainform" style="margin-bottom: 0%; height:98%;">
        <div class="profile">
            <div class="picture">
                <label for="petimage">
                    <img class="profilepic" src="..\Pet Grooming POS Website\Images\placeholder.png" >
                </label>
                <input type='file' onchange="readURL(this);" name = "petimage" id = "petimage" class = "petimage">
            </div>
            <div class="owner">
                <div class="card" style="height: 100%; background-color:#F2EFEB; border-radius: 2vh;">
                    <div class="card-body" style="padding-top:0%; padding-bottom:0%;">
                            <br>
                            <h1 style="font-size: 3vh; margin-top:1%;">Owner's Profile:</h1>
                            <label for="firstname">First Name:</label>
                            <input type='text' name="firstname" id="firstname" placeholder="First Name" class="form-control" style="font-size: 2vh;" required>
                            <br>
                            <label for="middlename">Middle Name:</label>
                            <input type='text' name="middlename" placeholder="Middle Name" class="form-control" style="font-size: 2vh;" required>
                            <br>
                            <label for="lastname">Last Name:</label>
                            <input type='text' name="lastname" placeholder="Last Name" class="form-control" style="font-size: 2vh;" required>
                            <br>
                            <label for="phone">Phone Number:</label>
                            <input type="tel" id="phone" name="phone" pattern="(09)[0-9]{9}" placeholder="Phone Number" class="form-control" style="font-size: 2vh;" required >
                            <br>
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" placeholder="Email" class="form-control" style="font-size: 2vh;">
                            <br>
                        </div>
                    </div>
                </div>
            <div class="pet">
                <div class="card" style="height: 100%; background-color:#F2EFEB; border-radius: 2vh;">
                        <div class="card-body" style="padding-top:0%; padding-bottom:0%;height: 100%;">
                        <br>
                        <h1 style="font-size: 3vh;">Pet's Profile:</h1>
                        <label for="petsname">Pet Name:</label>
                        <input type='text' name="petsname" placeholder="Pet Name" class="form-control" style="font-size: 2vh;" required>
                        <br>
                    <div class="radio"> 
                        <div class="card" style="width: 49%; float:left; margin-right: 1%;">
                            <div class="card-body">
                                <div class="gender">
                                    <p style="margin-bottom: 0%;">Gender</p>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" name= "Gender" type="radio" id="inlineCheckbox1" value="Male" required>
                                    <label class="form-check-label" for="inlineCheckbox1">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" name= "Gender" type="radio" id="inlineCheckbox2" value="Female" required>
                                    <label class="form-check-label" for="inlineCheckbox2">Female</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card"  style="width: 50%;">
                            <div class="card-body">
                                <div class="species">
                                    <p style="margin-bottom: 0%;">Pet Species</p>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" name= "Petspecies" type="radio" id="inlineCheckbox1" value="Cat" required>
                                    <label class="form-check-label" for="inlineCheckbox1">Cat</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" name= "Petspecies" type="radio" id="inlineCheckbox2" value="Dog" required>
                                    <label class="form-check-label" for="inlineCheckbox2">Dog</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <label for="weight">Weight(Kg):</label>
                        <input type='text' name="weight" placeholder="Weight(Kg)" class="form-control" style="font-size: 2vh;" required>
                    <br>
                    <label for="furcolor">Fur Color:</label>
                        <input type='text' name="furcolor" placeholder="Fur Color" class="form-control" style="font-size: 2vh;" required>
                    <br>
                    <label for="furcolor">Breed:</label>
                        <input type='text' name="breed" placeholder="Breed" class="form-control" style="font-size: 2vh;" required>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <div class="service">
        <div class="chooseservice">
            <div class="card" style="margin-right: 2%; height:100%; background-color:#F2EFEB; border-radius: 2vh;">
                <div class="card-body" style="height:100%; padding-bottom:0%;">
                    <h1 style="font-size: 2vh;">Service:</h1>
                        <div class="addservice">
                            <div class="input-group mb-3" id="wrapper">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01" style="font-size: 2vh;">Options</label>
                                </div>
                                <select class="custom-select" id="Service" name="Service[]" style="font-size: 2vh; height: 5vh;" required>
                                        <optgroup label = "Choose One">
                                        <option value="Bathing">Bathing</option>
                                        <option value="Clipping">Clipping</option>
                                        <optgroup label = "Extra Services">
                                        <option value="Blueberry Facial">Blueberry Facial</option>
                                        <option value="Pad & Paw Treatment">Pad & Paw Treatment</option>
                                        <option value="Two Step Dental">Two Step Dental</option>
                                        <option value="Sanitary Cut">Sanitary Cut</option>
                                        <option value="Flea Bath & Tick Removal">Flea Bath & Tick Removal</option>
                                        <option value="Ear Cleaning/Hair Removal">Ear Cleaning/Hair Removal</option>
                                        <option value="Nail Grinding">Nail Grinding</option>
                                        <option value="Nail Polish">Nail Polish</option>
                                        <option value="Teeth Brushing">Teeth Brushing</option>
                                        <option value="De Shedding Treatment">De Shedding TreatmentAudi</option>
                                        <optgroup label = "Cats & Kittens">
                                        <option value="Bathing Package">Bathing Package</option>
                                        <option value="Lion Clip">Lion Clip</option>
                                        <option value="Full Groom Package">Full Groom Package</option>
                                        <option value="Sanitary Clip">Sanitary Clip</option>
                                </select>
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="font-size: 2vh;">$</span>
                                </div>
                                <input type="number" class="form-control" name= "Price[]" placeholder="Price" aria-label="Amount (to the nearest dollar)" style="font-size: 2vh;" required>
                            </div>
                        </div>
                    <button type="button" class="btn btn-success btn-lg btn-block" id="plus" style="font-size: 2vh; margin-bottom:1%; background-color: #00cc99; " >+</button>
                </div>
            </div>
        </div>
            <div class="card"  style="height:100%; width:48.5%; background-color:#F2EFEB; border-radius: 2vh;">
                <div class="card-body" style="height:100%;">
                    <div class="form-group">
                        <label for="extra" style="font-size: 2vh;">Notes/Requests:</label>
                        <textarea class="form-control" name="extra" id="extra" style="resize:none; height:80%; width: 96%; margin-left:1%" class="form-control" style="font-size: 2vh;"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    <div class="receipt" style="height:100%;">
        <div class="card" style="height:126%; margin-right:1%; overflow:auto; background-color:#F2EFEB; border-radius: 2vh;">
            <div class="card-body" style="height:100%; padding-bottom:0%;">
                <div class="hidden" id="my-popup">
                    <img class="blah">
                    <p style="font-size: 2vh;">
                    <?php 
                        if($email == null){
                            $email = "N/A";
                        }
                        echo "<b>Owner Name: </b>" . $firstname . " " . $middlename . " " . $lastname;
                        echo "<br>";
                        echo "<b>Phone Number: </b>" . $phone;
                        echo "<br>";
                        echo "<b>Email: </b>". $email;
                        echo "<br>";
                        echo "<b>Pet Name: </b>" . $petsname;
                        echo "<br>";
                        echo "<b>Pet Species: </b>" . $petspecies;
                        echo "<br>";
                        echo "<b>Gender: </b>" . $petgender;
                        echo "<br>";
                        echo "<b>Weight: </b>" . $weight . "Kg";
                        echo "<br>";
                        echo "<b>Fur Color: </b>" . $furcolor;
                        echo "<br>";
                        echo "<b>Breed: </b>" . $breed;
                        echo "<br>";
                    ?>
                    </p>
                    <div class="card"  style="height: 30%;">
                        <div class="card-body" style="height: 100%; border-radius: 2vh;">
                            <p style="font-size: 2vh;"><b>Service:</b></p>
                            <div class="notes">
                                <p style="font-size: 3vh;">
                                <?php 
                                if($service != null){
                                    $arrlength = count($service);
                                    for($x = 0; $x < $arrlength; $x++) {
                                        echo $service[$x].  " - " . "$" . $price[$x] . "<br>";
                                        $total += $price[$x]; 
                                    }
                                }
                                ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="card" style="height: 30%;">
                        <div class="card-body" style="height: 100%;">
                            <p style="font-size: 2vh;"><b>Notes/Requests:</b></p>
                            <div class="notes">
                                <p style="font-size: 2vh;">
                                <?php 
                                    echo $extra;
                                ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-body" style="height: 100%;">
                            <p style="font-size: 2vh; margin-bottom:0%;">
                            <b>Total Price:</b>
                            <?php 
                                echo "$" . $total;
                            ?>
                            </p>
                        </div>
                    </div>
                    <br>
                    <center><input type="submit" id= "submit" class="btn btn-success" style="font-size: 2vh; background-color: #00cc99;"></center>
                </div>
            </div>
        </div>
    </div>
    </form>
    </body>
</html>