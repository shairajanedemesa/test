<html>
<head>
	<title> Bestfriends Forum | Welcome! </title>

	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<!--Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!--Script-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    

    <style type="text/css">

    *{
      font-family: "Tekton Pro"!important;

    }
    .navbar-brand{
    	background-color: transparent;
    }	
    .container::after{
    	background-color: transparent;	
    }
    body{
    	background-image: url("D0n0QuyUYAAMQUu.jpg");
    	background-repeat: no-repeat;
    	background-size: cover;
    	background-attachment: fixed;
    	color: white;
    }

    input[type=text], input[type=email] {
  border-top: none;
  border-right: none;
  border-left: none;
  border-bottom: 2px solid white;
  background-color: transparent;
  color:white;
  width: 100%;
  outline: none;
  border-radius: none;
}
 
input[type=password] {
  border: none;
  border-bottom: 2px solid white;
  background-color: transparent;
  color:white;
  width: 100%;
  outline: none;
}
.form-control{
	border: none;
  border-bottom: 2px solid #8e44ad;
  background-color: transparent;
  color:white;
  width: 100%;
  outline: none;
}
input[type=password]::placeholder{
	color: white;    
}

input[type=text]::placeholder{
	color: white;    
}

input[type=email]::placeholder{
	color: white;    
}

select.form-control{
  color: black;
  border: 2px solid white;
  background-color:white;
}

option{
  background-color:white;
  color:black;
}

p:hover{
 font-weight: bold;
}

.form-signin{
background: rgba(83, 83, 83, 0.4);

}

</style>
</head>
<body>
	<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" style="border-bottom-color: transparent; background-color: transparent;">
        <div class="container" style="background-color: transparent;">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll" style="background-color: transparent;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="background-color:transparent;">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a  class="navbar-brand page-scroll" href="home.php"></a>-->
            </div>
            <div class="navbar-header" style="background-color: transparent;">
                <a class="navbar-brand"  style="margin-bottom:5px;" href="index.php"> <p style="font-size: 22px; color:white; font-family:inherit;"> Bestfriends Forum </p> </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color: transparent;">
            	<!--
                <ul class="nav navbar-nav navbar-left">
                    <li><a href=""><span class="glyphicon glyphicon-list"></span> Topics</a></li>
                </ul>
            -->
                <div>
					<form class="navbar-form navbar-right" method="POST"role="search" action="pages/login.php">
					<div class="form-group">
					<input type="text" style="background-color: rgba(255,255,255,0);" class="form-control" name="username"placeholder="Username">
					<input type="password" class="form-control" name="password"placeholder="Password">
					</div>
					<button type="submit" style="background-color: transparent; border-color: white;" class="btn btn-success">Login</button>
					</form>
				</div>
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
			<div class="container" style="margin: auto;margin-top: 100px;">
				<div class="col-sm-4 col-md-3">
        <br> <br> <br>
					<h1>Share your experiences</h1><br>
          <h2>Make Friends.</h2>
					<h4>Have some fun!</h4>
				</div>
				 <div class="col-sm-5 col-md-4 pull-right">
                   <div class="row">
                   	<center>
    
                   		<center>
						<form method="POST" class="form-signin" action="functions/register.php">
								<h3 class="text-center" style ="text-transform: uppercase;">Sign up</h3>
              <hr>
							<input type="text" name="fname"placeholder="First Name"class="form-control" required>
							<input type="text" name="lname"placeholder="Last Name"class="form-control" required>
              <input type ="email" name="email" placeholder = "Email Address" class = "form-control" required>
							<script>
              //var email_add = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2-4})+$/;
              //function validate(){
                //var email_add = document.querySelector('input').value;
                //if(!email_add){
                //var x  = "Email must comply with this mask: example@example.com"; 
               //var email_add = document.querySelector('input').value;
                //document.getElementById('err').innerHTML = x;
                //document.getElementById()
                }
              }            
              </script>
              <label style="font-size: 16px; padding: 10px; width: 100px; font-weight: normal; float: left; margin-left: -15px; margin-top: 10px;"> Gender </label>
              <select style = "width: 150px; float: right; margin-top:10px;" class="form-control" name="gender" required="true">
                <option> </option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
							<input type="text" placeholder="Username" name="username"class="form-control" required>
							<input type="password" placeholder="Password" name="password" class="form-control" required>
							<input type="submit" value="Sign up" class="btn btn-success" style="background-color: transparent; text-transform: uppercase; border-color: white;	width:100%;">
						</form>
</div>
</div>
</body>
</html>