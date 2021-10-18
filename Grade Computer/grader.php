<html>
    <head>
        <title>
            Grade Computer
        </title>
        <link rel="stylesheet" href="..\Grade Computer\style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
    <!-- Top bar start-->
    <nav class="navbar navbar-light bg-light" style="background-image: linear-gradient(to right, #f7331e, #e6ce35);">
        <a class="navbar-brand" href="..\Grade Computer\index.php">
            <b style="color: white;">Grade Computer</b>
        </a>
    </nav>
    <!-- Top bar end-->
    <!-- Form start-->
    <b>
    <form class="row" style="margin: 0%;" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div class="col">
    <?php
        /* initialize variables */
        $MidQuiz1= isset($_POST['MidQuiz1']) ?$_POST['MidQuiz1'] : null; 
        $MidQuiz2= isset($_POST['MidQuiz2']) ?$_POST['MidQuiz2'] : null; 
        $Midlab1= isset($_POST['Midlab1']) ?$_POST['Midlab1'] : null; 
        $Midlab2= isset($_POST['Midlab2']) ?$_POST['Midlab2'] : null; 
        $Midattendance= isset($_POST['Midattendance']) ?$_POST['Midattendance'] : null;
        $Midexam= isset($_POST['Midexam']) ?$_POST['Midexam'] : null; 
        /* initialize variables */
    ?>
            <!-- Big card start-->
            <div class="card" style="padding:1%; margin-top:1%; margin-left:1%;background-color:#e3e3e3;">
            <center><p>Midterm Grades</p></center>
                <div class="row">
                    <div class="col-6">
                        <!-- Small card start-->
                        <div class="card" style="padding:2%; margin-top:1%;">
                            <center><p>Quizzes</p></center>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="MidQuiz1">Quiz #1</label>
                                    <input type="number" class="form-control" name="MidQuiz1" id="MidQuiz1" value = "<?php echo $MidQuiz1;?>" placeholder="input 50-100" min="50" max="100" required>
                                </div>
                                <div class="form-group col">
                                    <label for="MidQuiz2">Quiz #2</label>
                                    <input type="number" class="form-control" name="MidQuiz2" id="MidQuiz2" value = "<?php echo $MidQuiz2;?>" placeholder="input 50-100" min="50" max="100" required>
                                </div>
                            </div>
                        </div>
                        <!-- Small card end-->
                    </div>
                    <div class="col">
                        <!-- Small card start-->
                        <div class="card" style="padding:2%; margin-top:1%;">
                            <center><p>Lab works</p></center>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="Midlab1">Lab works #1</label>
                                    <input type="number" class="form-control" name="Midlab1" id="Midlab1" value = "<?php echo $Midlab1;?>" placeholder="input 50-100" min="50" max="100" required>
                                </div>
                                <div class="form-group col">
                                    <label for="Midlab2">Lab works #2</label>
                                    <input type="number" class="form-control" name="Midlab2" id="Midlab2" value = "<?php echo $Midlab2;?>" placeholder="input 50-100" min="50" max="100" required>
                                </div>
                            </div>
                        </div>
                        <!-- Small card end-->
                    </div>
                </div>
                <div class="row" style="margin-top:1%;">
                    <div class="col">
                        <!-- Small card start-->
                        <div class="card" style="padding:2%; margin-top:1%;">
                            <center><p>Attendance</p></center>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="Midattendance">Attendance</label>
                                    <input type="number" class="form-control" name="Midattendance" id="Midattendance" value = "<?php echo $Midattendance;?>" placeholder="input 50-100" min="50" max="100" required>
                                </div>
                            </div>
                        </div>
                        <!-- Small card end-->
                    </div>
                    <div class="col">
                        <!-- Small card start-->
                        <div class="card" style="padding:2%; margin-top:1%;">
                            <center><p>Exam</p></center>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="Midexam">Exam</label>
                                    <input type="number" class="form-control" name="Midexam" id="Midexam" value = "<?php echo $Midexam;?>" placeholder="input 50-100" min="50" max="100" required>
                                </div>
                            </div>
                        </div>
                        <!-- Small card end-->
                    </div>
                </div>
            </div>
            <!-- Big card end-->
            <!-- Midterm grade box -->
            <div class="row" style="margin-top:1%;">
                    <div class="col">
                        <div class="card" style="padding:2%; margin-top:1%;margin-left:1%;">
                                    <center><p>Midterm Grade</p></center>
                                    <?php
                                        /* multiply scores to decimal form of their respective percentages then add all */
                                        $Midclassparticipation = ($MidQuiz1 * .20) + ($MidQuiz2 * .20) + ($Midlab1 * .25) + ($Midlab2 * .25) + ($Midattendance * .10);
                                        $midtermgrade = ($Midclassparticipation * .60) + ($Midexam * .40);
                                        echo "<p class=\"answer\"> $midtermgrade </p>";
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- Midterm grade box -->
                    </div>
                </div>
        </div>
        
        <div class="col">
            <?php
                /* initialize variables */
                $FinalQuiz1= isset($_POST['FinalQuiz1']) ?$_POST['FinalQuiz1'] : null; 
                $FinalQuiz2= isset($_POST['FinalQuiz2']) ?$_POST['FinalQuiz2'] : null; 
                $Finallab1= isset($_POST['Finallab1']) ?$_POST['Finallab1'] : null; 
                $Finallab2= isset($_POST['Finallab2']) ?$_POST['Finallab2'] : null; 
                $Finalattendance= isset($_POST['Finalattendance']) ?$_POST['Finalattendance'] : null;
                $Finalexam= isset($_POST['Finalexam']) ?$_POST['Finalexam'] : null; 
                /* initialize variables */
            ?>
            <!-- Big card start-->
            <div class="card" style="padding:1%; margin-top:1%; margin-left:1%;background-color:#e3e3e3;">
            <center><p>Final term Grades</p></center>
                <div class="row">
                    <div class="col-6">
                        <!-- Small card start-->
                        <div class="card" style="padding:2%; margin-top:1%;">
                            <center><p>Quizzes</p></center>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="FinalQuiz1">Quiz #1</label>
                                    <input type="number" class="form-control" name="FinalQuiz1" id="FinalQuiz1" value = "<?php echo $FinalQuiz1;?>" placeholder="input 50-100" min="50" max="100" required>
                                </div>
                                <div class="form-group col">
                                    <label for="FinalQuiz2">Quiz #2</label>
                                    <input type="number" class="form-control" name="FinalQuiz2" id="FinalQuiz2" value = "<?php echo $FinalQuiz2;?>" placeholder="input 50-100" min="50" max="100" required>
                                </div>
                            </div>
                        </div>
                        <!-- Small card end-->
                    </div>
                    <div class="col">
                        <!-- Small card start-->
                        <div class="card" style="padding:2%; margin-top:1%;">
                            <center><p>Lab works</p></center>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="Finallab1">Lab works #1</label>
                                    <input type="number" class="form-control" name="Finallab1" id="Finallab1" value = "<?php echo $Finallab1;?>" placeholder="input 50-100" min="50" max="100" required>
                                </div>
                                <div class="form-group col">
                                    <label for="Finallab2">Lab works #2</label>
                                    <input type="number" class="form-control" name="Finallab2" id="Finallab2" value = "<?php echo $Finallab2;?>" placeholder="input 50-100" min="50" max="100" required>
                                </div>
                            </div>
                        </div>
                        <!-- Small card end-->
                    </div>
                </div>
                <div class="row" style="margin-top:1%;">
                    <div class="col">
                        <!-- Small card start-->
                        <div class="card" style="padding:2%; margin-top:1%;">
                            <center><p>Attendance</p></center>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="Finalattendance">Attendance</label>
                                    <input type="number" class="form-control" name="Finalattendance" id="Finalattendance" value = "<?php echo $Finalattendance;?>" placeholder="input 50-100" min="50" max="100" required>
                                </div>
                            </div>
                        </div>
                        <!-- Small card end-->
                    </div>
                    <div class="col">
                        <!-- Small card start-->
                        <div class="card" style="padding:2%; margin-top:1%;">
                            <center><p>Exam</p></center>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="Finalexam">Exam</label>
                                    <input type="number" class="form-control" name="Finalexam" id="Finalexam" value = "<?php echo $Finalexam;?>" placeholder="input 50-100" min="50" max="100" required>
                                </div>
                            </div>
                        </div>
                        <!-- Small card end-->
                    </div>
                </div>
            </div>
            <!-- Big card end-->
            <!-- Final term grade box start-->
            <div class="row" style="margin-top:1%;">
                    <div class="col">
                        <div class="card" style="padding:2%; margin-top:1%;margin-left:1%;">
                                    <center><p>Final term Grade</p></center>
                                    <?php
                                        /* multiply scores to decimal form of their respective percentages then add all */
                                        $Finalclassparticipation = ($FinalQuiz1 * .20) + ($FinalQuiz2 * .20) + ($Finallab1 * .25) + ($Finallab2 * .25) + ($Finalattendance * .10);
                                        $Finaltermgrade = ($Finalclassparticipation * .60) + ($Finalexam * .40);
                                        echo "<p class=\"answer\"> $Finaltermgrade </p>";
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- Final term grade box end-->
                    </div>
                </div>

        <!-- Semestral grade box start-->
        <div class="card" style="padding:1%; width:100%; margin-top:1%;">
            <center><p>Semestral Grade</p></center>   
            <?php
                /* multiply scores to decimal form of their respective percentages then add all */
                $Semestralgrade = ($midtermgrade * .50) + ($Finaltermgrade * .50);
                echo "<p class=\"answer\"> $Semestralgrade </p>";
            ?>
        </div>
        <!-- Semestral grade box end-->
        <div style="padding:0%; width:100%; margin-top:1%;margin-bottom:1%;">
            <center><button type="submit" class="btn" style="background:#e6ce35; padding: .5vw 2vw; font-size: 1vw;"><b>Submit</b></button></center>
        </div>
        </form>
    </b>
    <!-- Form end-->
    </body>
</html>