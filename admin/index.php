<?php
  	 session_start(); 
   $cnn = mysqli_connect("localhost","root","","website");
   if(!isset($_SESSION['admin']) && !isset($_POST['login']))
   	header('location:login.php');   
   else
   {    
	 if(isset($_POST['login']))
     {
	   $_SESSION['email_id'] = $_POST['email_id'];
	   $_SESSION['password'] = $_POST['password']; 
	   $email_id = $_SESSION['email_id'];
	   $password = $_SESSION['password'];
	   $sql = "SELECT * from admin WHERE email_id = '$email_id' AND password = '$password'" ;   
	   $rec = mysqli_query($cnn,$sql);
	   $num_of_rows = mysqli_num_rows($rec);
	   if(!$num_of_rows)
	   {
	   	 echo"<script>alert('Invalid Email_Id or Password!!!'); </script>";
	   	 echo "<script>location.href='login.php';</script>";
	   }	
	   else
	   {
	   	  $row = mysqli_fetch_assoc($rec);
	   	  $_SESSION['photo'] = $row['email_id'];   	  
	   }
	 } 
   }             
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="../../bootstrap/css/glyphicons.css">
    <style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Oswald|Rambla|Staatliches&display=swap');
body{
    margin: 0;
    padding: 0;
}
:root{
    --color-black: #000000;
    --color-white: #ffffff;
    --color-border: #ffffff34;
    --font-staat: 'Staatliches', cursive;
    --font-os:  'Oswald', sans-serif;
    --font-ram: 'Rambla', sans-serif;
}
.font-staat{
    font: normal 400 18px var(--font-staat);
}
.font-os{
    font: normal 300 18px var(--font-os);
}
.font-ram{
    font: normal bold 18px var(--font-ram);
}
.font-size-40{
    font-size: 40px;
}
.font-size-34{
    font-size: 34px;
}
.font-size-27{
    font-size: 27px;
}
.font-size-20{
    font-size: 20px;
}
.font-size-16{
    font-size: 16px;
}
.bgcolor-black{
    background-color: var(--color-black);
}
#header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index:1;
    transition: left .5s ease;
}
#header nav{
    height: 100vh;
}
#header .site-title .navbar-brand{
    letter-spacing: 2px;
    color: var(--color-white);
}
#header .nav-link{
    margin: .7rem 1rem;
    border-bottom: 1px solid var(--color-border);
    text-transform: uppercase;
}
#header .nav-link:hover{
    color: var(--color-white) !important;
}
#header .toggle-button{
    background: none;
    color: var(--color-black);
    position: fixed;
    top: 25px;
    right: 20px;
    border: 1px solid var(--color-border);
}
.toggle-left{
    left: 0 !important;
    width: 1000px !important;
}
@media screen and (min-width: 768px){
    .toggle-button{
        display: none;
    }
    #header{
        z-index:0;
    }
}
.glyphicon
{
    color:grey;
}
.glyphicon:hover
{
    color:white;
}
 </style>
   </head>
<body>
    <div class="col-md-10" style="padding-top:150px;padding-left:380px;"> 
        <table class="table table-striped" border="0">
            <tr>
                <td rowspan="9">
                   <img src="images\<?php echo $_SESSION['photo'];?>.jpg" style="width:300px;height:350px;">
                </td>
                <th>Name : </th>
                <td>Mahboob Hasan</td>
            </tr>
            <tr>
                <th>Date of Birth : </th>
                <td>05-November-1998</td>
            </tr>
                <th>Contact No : </th>
                <td>+91-6394603713</td>
            </tr>
            <tr>
                <th>Email_Id : </th>
                <td>machasan786@gmail.com</td>
            </tr> 
        </table>
    </div>
    <header id="header">
        <div class="row m-0">
            <div class="col-3 bgcolor-black">
                <nav class="primary-nav navbar-expand-md">
                    <div class="site-title text-center text-light py-5">
                        <a href="#" class="navbar-brand font-staat font-size-40">Welcome,</a>
                        <p class="description text-uppercase font-os">Mahboob Hasan</p>
                    </div>
                    <div class="d-flex flex-column">
                         <a href="#" class="nav-item nav-link text-white-50 font-os font-size-16 active"><i class="fa fa-home"></i>&nbsp Home</a>
                        <a href="message.php" class="nav-item nav-link text-white-50 font-os font-size-16 active"><i class="fab fa-facebook-messenger"></i>&nbsp Messages</a>
                        <a href="logout.php" class="nav-item nav-link text-white-50 font-os font-size-16 active"><i class="glyphicon glyphicon-log-out"></i>&nbsp Logout</a>
                    </div>
                </nav>
            </div>
        </div>
        <button class="toggle-button"><span class="fas fa-bars fa-2x"></span></button>
    </header>  
  
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js" integrity="sha256-MAgcygDRahs+F/Nk5Vz387whB4kSK9NXlDN3w58LLq0=" crossorigin="anonymous"></script>
<script src="./vendor/typed/typed.min.js"></script>
<script src="./index.js"></script>
</body>
</html>