<?php
include("sql.php");
$msg='';
$repassword='';
$email='';

if(isset($_POST['submit2']))
{

    $name=$_POST['name1'];
    $password=$_POST['password1'];
    if(empty($name))
    {
        $msg1='<div class="error">Please Enter Your name</div>';
    }
    if(empty($password))
    {
        $msg2='<div class="error">Please Enter the Password</div>';
    }

//    echo $username."</br>".$password."</br>".$repassword."</br>".$email."</br>";

    $query=mysqli_query($sql,"select * from users where name='$name' and password='$password'");

    if(mysqli_num_rows($query)>0)
    {
        $arr=mysqli_fetch_assoc($query);
        $lid=$arr['id'];
        session_start();
        $_SESSION['lid']=$lid;
        echo "<script>alert('Sign_In successfull');</script>";
        header("Location:home.php");
    }
    else{
        echo "<script>alert('Please SignUp');</script>";
    }
}

if(isset($_POST['submit1']))
{
//    echo "<script>alert('Submit1');</script>";
    $name=$_POST['name'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];
    $email=$_POST['email'];

//    echo $username."</br>".$password."</br>".$repassword."</br>".$email."</br>";
   if($password!==$repassword)
   {
       $msg="<div class='error'>Password is not same</div>";
   }
    $query=mysqli_query($sql,"INSERT INTO users(name,password,repeatpassword,email) VALUES('$name','$password','$repassword','$email')");
    if($query)
    {
        echo "<script>alert('SignUp successfull');</script>";
    }
    else{
        echo "<script>alert('something went worng!');</script>";
    }
}
$msg1='';$msg2='';
$name='';$password='';


?>

<html>
<style type="text/css">

    body{
        margin:0;
        color:#6a6f8c;*/
    background:#c8c8c8;
        font:600 16px/18px 'Open Sans',sans-serif;
        /*background:url(../images/banner.jpg) no-repeat center top;*/
        background-attachment:fixed;
        background-size:cover;
        height:100vh;
        min-height:100%;
    }
    *,:after,:before{box-sizing:border-box}
    .clearfix:after,.clearfix:before{content:'';display:table}
    .clearfix:after{clear:both;display:block}
    a{color:inherit;text-decoration:none}

    .login-wrap{
        width:100%;
        margin:auto;
        margin-top:20px;
        max-width:525px;
        min-height:670px;
        position:relative;

        /*background:url(https://raw.githubusercontent.com/khadkamhn/day-01-login-form/master/img/bg.jpg) no-repeat center;*!*/
        box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
    }
    .login-html{
        width:100%;
        height:100%;
        position:absolute;
        padding:90px 70px 50px 70px;
        background:rgba(0,0,0,0.5);

        /*background:rgba(40,57,101,.9);*/
        /*background:url(../images/banner.jpg) no-repeat center top;*/
        /*background-attachment:fixed;*/
        /*background-size:cover;*/

    }
    .login-html .sign-in-htm,
    .login-html .sign-up-htm{
        top:0;
        left:0;
        right:0;
        bottom:0;
        position:absolute;
        transform:rotateY(180deg);
        backface-visibility:hidden;
        transition:all .4s linear;
    }
    .login-html .sign-in,
    .login-html .sign-up,
    .login-form .group .check{
        display:none;
    }
    .login-html .tab,
    .login-form .group .label,
    .login-form .group .button{
        text-transform:uppercase;
    }
    .login-html .tab{
        font-size:22px;
        margin-right:15px;
        padding-bottom:5px;
        margin:0 15px 10px 0;
        display:inline-block;
        border-bottom:2px solid transparent;
    }
    .login-html .sign-in:checked + .tab,
    .login-html .sign-up:checked + .tab{
        color:#fff;
        border-color:#1161ee;
    }
    .login-form{
        min-height:345px;
        position:relative;
        perspective:1000px;
        transform-style:preserve-3d;
    }
    .login-form .group{
        margin-bottom:15px;
    }
    .login-form .group .label,
    .login-form .group .input,
    .login-form .group .button{
        width:100%;
        color:#fff;
        display:block;
    }
    .login-form .group .input,
    .login-form .group .button{
        border:none;
        padding:15px 20px;
        border-radius:25px;
        background:rgba(255,255,255,.1);
    }
    .login-form .group input[data-type="password"]{
        text-security:circle;
        -webkit-text-security:circle;
    }
    .login-form .group .label{
        color:#aaa;
        font-size:12px;
    }
    .login-form .group .button{
        background:#1161ee;
    }
    .login-form .group label .icon{
        width:15px;
        height:15px;
        border-radius:2px;
        position:relative;
        display:inline-block;
        background:rgba(255,255,255,.1);
    }
    .login-form .group label .icon:before,
    .login-form .group label .icon:after{
        content:'';
        width:10px;
        height:2px;
        background:#fff;
        position:absolute;
        transition:all .2s ease-in-out 0s;
    }
    .login-form .group label .icon:before{
        left:3px;
        width:5px;
        bottom:6px;
        transform:scale(0) rotate(0);
    }
    .login-form .group label .icon:after{
        top:6px;
        right:0;
        transform:scale(0) rotate(0);
    }
    .login-form .group .check:checked + label{
        color:#fff;
    }
    .login-form .group .check:checked + label .icon{
        background:#1161ee;
    }
    .login-form .group .check:checked + label .icon:before{
        transform:scale(1) rotate(45deg);
    }
    .login-form .group .check:checked + label .icon:after{
        transform:scale(1) rotate(-45deg);
    }
    .login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
        transform:rotate(0);
    }
    .login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
        transform:rotate(0);
    }

    .hr{
        height:2px;
        margin:60px 0 50px 0;
        background:rgba(255,255,255,.2);
    }
    .foot-lnk{
        text-align:center;
    }
    body{
        background-image:url("banner.jpg");
        background-color:#cccccc;
    }

</style>
<body >
<div class="login-wrap">
    <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">

        <form action="" method="post">

                <div class="sign-in-htm">
                    <div class="group">
                        <label for="name" class="label">Username</label>
                        <input id="name" type="text" class="input" name="name1">
                    </div>
                    <div class="group">
                        <label for="password" class="label">Password</label>
                        <input id="password" type="password" class="input" data-type="password" name="password1">
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                    </div>
                    <div class="group">
                        <input type="submit" name="submit2" class="button" value="Sign In">

                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="#forgot">Forgot Password?</a>
                    </div>
                </div>
        </form>


        <form action="" method="post">
                <div class="sign-up-htm">
                    <div class="group">
                        <label for="name" class="label">Username</label>
                        <input id="name" name="name" type="uname" class="input" value='<?php $name;?>'>
                    </div>
                    <div class="group">
                        <label for="password" class="label">Password</label>
                        <input id="password" name="password" type="password" class="input" data-type="password" value='<?php $password;?>'>
                    </div>
                    <div class="group">
                        <label for="password" class="label">Repeat Password</label>
                        <input id="repassword" name="repassword" type="repassword" class="input" data-type="password" value='<?php $repassword;?>'>
                        <?php echo $msg;?>
                    </div>
                    <div class="group">
                        <label for="password" class="label">Email Address</label>
                        <input id="email" name="email"  type="email" class="input" value='<?php $email;?>'>
                    </div>
                    <div class="group">
                        <input type="submit" class="button" name="submit1"  value="Sign Up">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <label for="tab-1">Already Member?</a>
                    </div>
                </div>
        </form>

            </div>
    </div>
</div>

</body>
</html>




