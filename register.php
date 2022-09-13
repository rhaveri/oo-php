<?php
session_start();
include ("connection.php");
include ("functions.php");

require 'header.php';

if ($_SERVER['REQUEST_METHOD'] == "POST")//if user has clicked on post button
{
    //sth was posted
    $name= $_POST['name'];
    $username=  $_POST['username'];
    $email=  $_POST['email'];
    $password=  $_POST['password'];

    if (!empty($name) && !empty($username) && !empty($email) && !empty($password) ){
        //save to db
        $user_id = random_num(20);
        $query = "insert into user (user_id,name,username,email,password) values ('$user_id','$name','$username','$email','$password')";


        mysqli_query($con,$query);
        header("Location: login.php");
        die;
    }else{
        echo 'please enter the info';

    }
}


?>

<h1>Sign up</h1>
<div class="tab-content">
    <div class="tab-panel" id="pills-login" role="tabpanel" aria-labelledby="tab-login">

        <form method="post">
            <div class="container1">
                <!-- Name input -->
                <div class="form-outline mb-4">
                    <label class="form-label"  for="registerName">Name</label>
                    <input type="text"  name="name" id="registerName" class="form-control"/>
                </div>

                <!-- Username input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="registerUsername">Username</label>
                    <input type="text" name="username"  required="required" id="registerUsername" class="form-control"/>
                </div>


                <div class="form-outline mb-4">
                    <label class="form-label"  for="loginName">Email </label>
                    <input type="email" name="email" required="required" id="loginName" class="form-control"/>
                </div>


                <div class="form-outline mb-4">
                    <label class="form-label"  for="loginPassword">Password</label>
                    <input type="password" name="password" required="required" id="loginPassword" class="form-control"/>
                </div>

                <!-- Repeat Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                    <input type="password" name="passwordR" required="required" id="registerRepeatPassword" class="form-control"/>
                </div>
                <br>

                <div class="row mb-4">

                    <button id="button" type="submit" name="submit" class="btn btn-primary btn-block mb-4">Register
                    </button>


                </div>
                <br>
                <div class="row mb-4">

                    <a href="login.php">Log in</a>


                </div>

            </div>
        </form>
    </div>

</div>