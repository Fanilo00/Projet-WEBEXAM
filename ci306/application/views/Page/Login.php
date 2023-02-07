
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/Images/">
    <link rel="stylesheet" href="../Assets/Css/Style1.css">
    <link rel="stylesheet" href="../Assets/Bootstrap/bootstrap.css">
    <title>Login</title>
</head>
<body>
        <form action="<?php echo $_SERVER['SCRIPT_NAME']?>" method="POST">
            <div class="left col-lg-4 col-md-4 col-sm-3 hidden-xs"></div>
            <div id="formbox" class="col-lg-4 col-md-4 col-sm-3 hidden-xs">
            <center><h2><p style="margin:30px">Welcome</p></h2></center>
            <div class="form-group">
            <input name="email" type="text" class="form-control" placeholder="Email">
            <label for="text"></label>
            <input name="mdp" type="password" class="form-control" placeholder="password">
            <br>
            <?php if(isset($_GET['error'])) { ?>
        <?php if($_GET['error']==1) { ?>
            <center><span class="label label-danger">Please,check your email address!</span></center>
        <?php } ?>
        <?php if($_GET['error']==2) { ?>
            <center><span class="label label-danger">Wrong password!</span></center>
        <?php } ?>
        <?php if($_GET['error']==3) { ?>
            <center><span class="label label-danger">Please retry!</span></center>
        <?php } ?>
    <?php } ?>
            <center><button type="submit" name="btnlog" class="btn btn-default">LOGIN</button></center>
        </br>
        </form>
       
        <a href="Register.php"><div class="register">Register?</div></a>
      
        <div class="right col-lg-4 col-md-4 col-sm-3 hidden-xs"></div>          
</body>
</html>