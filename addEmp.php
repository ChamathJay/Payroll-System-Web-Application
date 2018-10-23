<?php
session_start();
 if(!$_SESSION['email']) {
    header("Location:index.php");
    exit();
 }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HR-Easy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="addEmp.css" />

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

    <!-- Optional theme -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous"> -->

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

    <!-- Font Awesome Free CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Audiowide|Orbitron" rel="stylesheet">
</head>

<body style="background-color: rgb(25, 45, 66);">

    <div class="container">

        <div class="jumbotron">
            <h1 style="font-family: 'Orbitron', sans-serif; font-weight: bolder;">NEW EMPLOYEE</h1>
            <div class="container">

                <form action="process.php" method="POST">
                    <div class="row">
                        <div class="form-group">
                            <div id="" class="col-lg-12">
                                <div style="padding-right: 5px;" class="row">
                                    <!-- Picture -->
                                    <div style="margin: 0 auto; text-align: center;" class="col-xs-12 col-lg-offset-5  col-md-offset-5  col-sm-offset-4  col-xs-offset-4  desc image-upload">
                                        <label style="margin-left: 10px; margin-bottom: 20px;" for="photo">
                                            <!-- <img src="https://www.w3schools.com/howto/img_avatar2.png" /> -->
                                            <svg aria-hidden="true" data-prefix="fas" data-icon="user-circle" class="svg-inline--fa fa-user-circle fa-w-16"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 496 512">
                                                <path fill="blakc" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z"></path>
                                            </svg>
                                        </label>
                                        <input id="photo" type="file" accept="image/*" name="photo" class="">
                                    </div>
                                </div>
                            </div>

                            <div id="" class="col-lg-12">
                                <div class="row">
                                    <!-- First name -->
                                    <div style="margin-top:-25px; margin-left: 0px;" class="col-md-3 desc">
                                        <label for="firstname"><i class="glyphicon glyphicon-user"></i> Name:</label>
                                        <input id="firstname" placeholder="First Name" type="text" value="" name="firstname"
                                            class="form-control" required>
                                    </div>

                                    <!-- Middle Initial -->
                                    <div style="margin-top:-20px;" class="col-md-3 desc">
                                        <label for="mi"></label>
                                        <input id="mi" placeholder="M.I." type="text" value="" name="mi" class="form-control">
                                    </div>

                                    <!-- Last name -->
                                    <div style="margin-top:-20px; margin-bottom: 40px;" class="col-md-3 desc">
                                        <label for="lastname"></label>
                                        <input id="lastname" placeholder="Last Name" type="text" value="" name="lastname"
                                            class="form-control" required>
                                    </div>

                                    <!-- Gender -->
                                    <div style="margin-top:-25px; margin-bottom: 10px;" class="col-md-3 desc">
                                        <label for="gender"><i class="fa fa-venus-mars custom"></i> Gender:</label>
                                        <input id="gender" placeholder="Gender" type="text" value="" name="gender"
                                            class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div id="" class="col-lg-12">
                                <div class="row">
                                    <!-- SSN -->
                                    <div class="col-md-3 col-md-offset-3 desc">
                                        <label for="ssn"><i class="fas fa-fingerprint"></i> SSN:</label>
                                        <input id="ssn" placeholder="xxx-xx-xxxx" type="text" value="" name="ssn" class="form-control"
                                            required>
                                    </div>

                                    <!-- DOB -->
                                    <div class="col-md-3 desc">
                                        <label for="dob"><i class="fas fa-birthday-cake"></i> DOB:</label>
                                        <input id="dob" placeholder="Birthday" type="date" value="" name="dob" class="form-control"
                                            required>
                                    </div>

                                </div>
                                <hr class="line">
                            </div>
                        </div>

                        <div class="form-group">
                            <div id="" class="col-lg-12">
                                <div class="row">

                                    <!-- Organization -->
                                    <div class="col-md-4 desc">
                                        <label for="organization"><i class="fas fa-globe"></i> Organization:</label>
                                        <input id="organization" placeholder="Organization" type="text" value="" name="organization"
                                            class="form-control" required>
                                    </div>

                                    <!-- Department -->
                                    <div class="col-md-4 desc">
                                        <label for="department"><i class="fas fa-building"></i> Department:</label>
                                        <input id="department" placeholder="Department" type="text" value="" name="department"
                                            class="form-control" required>
                                    </div>

                                    <!-- EmplID -->
                                    <div class="col-md-4 desc">
                                        <label for="emplid"><i class="fas fa-id-card-alt"></i> ID:</label>
                                        <input id="emplid" placeholder="xxxxxxxx" type="text" value="" name="emplid"
                                            class="form-control" required>
                                    </div>

                                    <!-- Position -->
                                    <div class="col-md-4 col-md-offset-2 desc">
                                        <label for="position"><i class="fas fa-user"></i> Position:</label>
                                        <input id="position" placeholder="Position" type="text" value="" name="position"
                                            class="form-control" required>
                                    </div>

                                    <!-- <div class="col-lg-4 desc"></div> -->

                                    <!-- Pay rate -->
                                    <div class="col-md-4 desc">
                                        <label for="payRate"><i class="fas fa-coins"></i> Pay Rate:</label>
                                        <input id="payRate" placeholder="$" type="text" value="" name="payrate" class="form-control"
                                            required>
                                    </div>

                                </div>
                                <hr class="line">
                            </div>
                        </div>

                        <div class="form-group">
                            <div id="" class="col-lg-12">
                                <div class="row">
                                    <!-- Insurance -->
                                    <div class="col-md-4 desc">
                                        <div class="form-group">
                                            <label for="insurance"><i class="fas fa-briefcase-medical"></i> Insurance:</label>
                                            <select required class="form-control" name="insurance">
                                                <option value="" disabled selected>Choose Insurance</option>
                                                <option value="MetroPlus">MetroPlus</option>
                                                <option value="MVP Health Plan">MVP Health Plan</option>
                                                <option value="Oscar Insurance Corporation">Oscar Insurance Corporation</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Dental -->
                                    <div class="col-md-4 desc">
                                        <div class="form-group">
                                            <label for="dental"><i class="fas fa-tooth"></i> Dental Plan:</label>
                                            <select required class="form-control" name="dental">
                                                <option value="" disabled selected>Choose Dental Plan</option>
                                                <option value="Humana">Humana</option>
                                                <option value="Cigna">Cigna</option>
                                                <option value="Ameritas">Ameritas</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Vision -->
                                    <div class="col-md-4 desc">
                                        <div class="form-group">
                                            <label for="vision"><i class="fas fa-eye"></i> Vision Plan:</label>
                                            <select required class="form-control" name="vision">
                                                <option value="" disabled selected>Choose Vision Plan</option>
                                                <option value="Aetna">Aetna</option>
                                                <option value="Guardian">Guardian</option>
                                                <option value="UnitedHealthCare">UnitedHealthCare</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <hr class="line">
                            </div>
                        </div>

                        <div class="form-group">
                            <div id="" class="col-lg-12">
                                <div class="row">
                                    <!-- Address -->
                                    <div style="margin-top: 0px; margin-bottom: -20px;" class="col-md-6 desc">
                                        <label for="address_l1"><i class="fas fa-location-arrow"></i> Address:</label>
                                        <input id="address_l1" placeholder="Address Line 1" type="text" value="" name="address_one"
                                            class="form-control" required>
                                    </div>

                                    <div style="margin-bottom: -20px;" class="col-md-6 desc">
                                        <label for="address_l2"></label>
                                        <input id="address_l2" placeholder="Address Line 2" type="text" value="" name="address_two"
                                            class="form-control">
                                    </div>

                                    <div style="margin-bottom: -20px;" class="col-md-3 desc">
                                        <label for="apt"></label>
                                        <input id="apt" placeholder="Apt." type="text" value="" name="apt" class="form-control"
                                            required>
                                    </div>

                                    <div style="margin-bottom: -20px;" class="col-md-3 desc">
                                        <label for="city"></label>
                                        <input id="city" placeholder="City" type="text" value="" name="city" class="form-control"
                                            required>
                                    </div>

                                    <div style="margin-bottom: -20px;" class="col-md-3 desc">
                                        <label for="state"></label>
                                        <input id="state" placeholder="State" type="text" value="" name="state" class="form-control"
                                            required>
                                    </div>

                                    <div class="col-md-3 desc">
                                        <label for="zip"></label>
                                        <input id="zip" placeholder="Zip" type="text" value="" name="zip" class="form-control"
                                            required>
                                    </div>
                                </div>

                                <hr class="line">
                            </div>
                        </div>

                        <div class="form-group">
                            <div id="" class="col-lg-12">
                                <div class="row">
                                    <!-- Phone -->
                                    <div class="col-md-6 desc">
                                        <label for="phone1"><i class="fas fa-phone"></i> Primary Phone:</label>
                                        <input id="phone1" placeholder="(xxx) xxx-xxxx" type="tel" value="" name="phone"
                                            class="form-control" required>
                                    </div>

                                    <!-- Email -->
                                    <div class="col-md-6 desc">
                                        <label for="email"><i class="fas fa-envelope"></i> Email:</label>
                                        <input id="email" placeholder="someone@example.com" type="email" value="" name="email"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <hr class="line">
                            </div>
                        </div>

                        <div id="" class="col-lg-12">
                            <!-- Submit/Save -->
                            <div id="button" class="col-sm-12">
                                <button id="save" name="submit"><i class="fas fa-clipboard-check"></i></button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>

    <script type="text/javascript" src="addEmp.js"></script>
</body>

</html>



