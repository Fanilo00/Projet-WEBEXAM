<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">


    <link rel="stylesheet" href="<?php echo base_url();?>Assets/CSS/registre/styleReg.css">
</head>
<body style="background-image: url(<?php echo base_url();?>Assets/Loginstyle/images/Back.jpg);">

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action="<?php echo base_url('INSCRIT/Traitinscrit');?>" method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="nom" id="name" placeholder="Votre Nom"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Votre Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="pass" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="repass" id="re_password" placeholder="Repeat your password"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="<?php echo base_url('Log/index');?>" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>Assets/JS/regitre/mainreg.js"></script>
</body>
</html>