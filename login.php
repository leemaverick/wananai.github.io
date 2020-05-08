<?php 
session_start();
if(isset($_SESSION['customer']))
{
    header("location:user-index.php");
}

include("connection.php");
error_reporting(0);
?>
<?php

require "header.php";

?>
<title>Log In</title>
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
                                <a href="#">Login</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Login</h1>
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
            START LOGIN AREA
    =================================-->
    <section class="login_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form action="" method="post">
                        <div class="cardify login">
                            <div class="login--header">
                                <h3>Welcome Back</h3>
                                <p>You can sign in with your username</p>
                            </div>
                            <!-- end .login_header -->

                            <div class="login--form">
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input  type="text" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                                </div>

                                <div class="form-group">
                                    <label for="Password">Password</label>
                                    <input  type="password" value="Password" name="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
                                </div>

                                <div class="form-group">
                                    <div class="custom_checkbox">
                                        <input type="checkbox" id="ch2">
                                        <label for="ch2">
                                            <span class="shadow_checkbox"></span>
                                            <span class="label_text">Remember me</span>
                                        </label>
                                    </div>
                                </div>

                                <button class="btn btn--md btn--round" type="submit" name="submit">Login Now</button>

                                <?php

                                    if(isset($_POST['submit']))
                                    {
                                    $email= $_POST['Email'];
                                    $passwd= $_POST['Password'];

                                    if($email != "" && $passwd != ""){
                                        $query= "SELECT * from customers where email='$email' && password='$passwd'";
                                        $data= mysqli_query($conn, $query);
                                        $total= mysqli_num_rows($data);
                                        if($total == 1){
                                                $_SESSION['customer']= $email;
                                                echo "<script type='text/javascript'>  window.location='user-index.php'; </script>";
                                        }
                                        else{
                                            echo "\nInvalid Username or Password";
                                        }
                                    }
                                    else{
                                        echo "\nAll Fields Required";
                                    }
                                }

                                ?>


                                <div class="login_assist">
                                    <p class="recover">Lost your
                                        <a href="recovery-pass.php">username</a> or
                                        <a href="recovery-pass.php">password</a>?</p>
                                    <p class="signup">Don't have an
                                        <a href="signup.php">account</a>?</p>
                                </div>
                            </div>
                            <!-- end .login--form -->
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
            END LOGIN AREA
    =================================-->

   <?php

require "footer.php";

?>
