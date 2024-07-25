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
   <div class="col-md-10" style="padding-top:50px;padding-left:400px;padding-right:30px;">      
     <TABLE class="table table-striped table-bordered">
        <tr><th colspan="4" style="color:blue;text-align:center;font-size:25px;">User's Response</th></tr>
        <tr>
            <th>Sno.</th>
            <th>Name</th>
            <th>Email or Phone</th>
            <th>Message</th>
       </tr>
       <?php 
       $cnn = mysqli_connect("localhost","root","","website");
       $sql = "SELECT * from message";
       $rec = mysqli_query($cnn,$sql);
       $n = mysqli_num_rows($rec);        
       for($i=1;$i<=$n;$i++)
       {
          $row = mysqli_fetch_assoc($rec);
          echo "<tr>";
          echo "<td>$i</td>";
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['email'] . "</td>";
          echo "<td>" . $row['msg'] . "</td>";
          echo "<tr>";
       }
        mysqli_close($cnn);
       ?>       
     </TABLE>
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
                       <a href="index.php" class="nav-item nav-link text-white-50 font-os font-size-16 active"><i class="fa fa-home"></i>&nbsp Home</a>
                        <a href="#" class="nav-item nav-link text-white-50 font-os font-size-16 active"><i class="fab fa-facebook-messenger"></i>&nbsp Messages</a>
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