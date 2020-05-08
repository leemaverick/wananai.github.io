<?php
session_start();
include("connection.php");
error_reporting(0);
?>
<?php

require "header.php";

?>
<title>Sign Up</title>
    <!--================================
        START BREADCRUMB AREA
    =================================-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li class="active">
                                <a href="#">Signup</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Sign up</h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END BREADCRUMB AREA
    =================================-->

    <!--================================
            START SIGNUP AREA
    =================================-->
    <section class="signup_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form action="#">
                        <div class="cardify signup_form">
                            <div class="login--header">
                                <h3>Create Your Account</h3>
                                <p>Please fill the following fields with appropriate information to register a new Wananai
                                    account.
                                </p>
                            </div>
                            <!-- end .login_header -->

                            <div class="login--form">
                                
                                <div class="form-group">
                                    <label for="Username">Your Name</label>
                                    <input  type="text" value="Username" name="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="true">
                                </div>

                                <div class="form-group">
                                    <label for="Email">Email Address</label>
                                    <input  type="text" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="true">
                                </div>

                                <div class="form-group">
                                    <label for="Phone">Phone Number</label>
                                    <input  type="text" value="Phone" name="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="true">
                                </div>

                                <div class="form-group">
                                    <label for="Street">Street Address</label>
                                    <input  type="text" value="Street Address" name="Street" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Street';}" required="true">
                                </div>


                                <div class="form-group">
                                    <label for="City">City</label>
                                    <input  type="text" value="City" name="City" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'City';}" required="true">
                                </div>

                                 <div class="form-group">
                                    <label for="Zipcode">Zipcode</label>
                                    <input  type="text" value="Pincode/ Zipcode" name="Pincode" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Pincode';}" required="true">
                                </div>

                                <div class="form-group">
                                    <label for="Password">Password</label>
                                    <input  type="password" value="Password" name="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="true">
                                </div>

                                <div class="form-group">
                                    <label for="ConfirmPassword">Confirm Password</label>
                                    <input  type="password" value="Confirm Password" name="ConfirmPassword" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required="true">
                                </div>

                                <input type="submit" name="submit" value="Submit">

                                <div class="login_assist">
                                    <p>Already have an account?
                                        <a href="login.php">Login</a>
                                    </p>
                                </div>
                                
                               
                            </div>
                            <!-- end .login--form -->

                            <?php
                        if($_GET['submit']){

                            $uname= $_GET['Username'];
                            $email= $_GET['Email'];
                            $phone= $_GET['Phone'];
                            $street= $_GET['Street'];
                            $city= $_GET['City'];
                            $pincode= $_GET['Pincode'];
                            $passwd= $_GET['Password'];
                            $cpasswd= $_GET['ConfirmPassword'];
                        

                        if($uname != "" && $email != "" && $phone != "" && $city != "" && $pincode != "" && $passwd != ""){

                            if($passwd == $cpasswd){

                                $query= "INSERT INTO customers values (DEFAULT,'$uname','$email','$street','$city','$pincode','$passwd','$phone')";
                                $data= mysqli_query($conn, $query);

                                if($data == false){
                                    echo " All Fields Required ";
                                }
                                else{
                                    $_SESSION['customer']= $uname;
                                    echo "<script type='text/javascript'>  window.location='user-index.php'; </script>";
                                }

                            }
                            else{
                                echo "Passwords don't Match";
                            }
                        }
                        else{
                            echo " All Fields Required ";
                        }
                    }

                    ?>


                        </div>
                        <!-- end .cardify -->
                    </form>
                </div>
                <!-- end .col-md-6 -->
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
    </section>
    <!--================================
            END SIGNUP AREA
    =================================-->

<?php

require "footer.php";

?>
