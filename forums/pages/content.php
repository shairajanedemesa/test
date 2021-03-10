<?php
  session_start();
  if (isset($_SESSION['username'])&&$_SESSION['username']!=""){
  }
  else
  {
    header("Location:../index.php");
  }
$username=$_SESSION['username'];
$userid = $_SESSION['user_Id'];

?>
<html>
<head>
	<title> Bestfriend Forums | Content! </title>

	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<!--Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  
    <!--Script-->
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>
<style>

*{
        font-family: "Tekton Pro";
    }
        body{
            background-image: url("DGxkLCMUAAAl6Bx.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed
            ;
            color: white;
            background-position: center;
        }
        .well{
          background-color: white;
          color:black;
        }

        .panel-body{
          background: transparent;
        }

        /*modals*/
#top,.w3-teal{
    background-color: black!important;
}
h2{
  font-family: inherit;
}

.panel-success {
    border-color: #d6e9c6;
    background-color: transparent!important;
}
</style>
</head>
<body>
	<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="home.php"></a>
            </div>
            <div class="navbar-header">
                <a class="navbar-brand" href="home.php" style="margin-bottom:6px;"><p style="font-size: 22px; color:white; font-family: inherit; margin-top: 5px;"> Bestfriends Forum </p></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">
     				 <ul class="nav navbar-nav navbar-right">
				 <ul class="nav navbar-nav navbar-right">
                         <li><a href="#" onclick="document.getElementById('id01').style.display='block'" ><span class="glyphicon glyphicon-user"></span> <?php echo $username;?></a></li>
                        <li ><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                
                </ul>   
               
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container" style="margin:7% auto;">
    <h4 style="color: white; font-family: inherit; font-size: 25px; text-transform: uppercase;">Latest Discussion</h4>
    	<hr>
         <div class="panel panel-success">
         <div class="panel-heading" style="background-color:black;">
                    <h3 class="panel-title"style="color:white; font-family: inherit;"><?php

include "../functions/db.php";
     $id = $_GET['post_id'];
     

$sql = mysqli_query($con,"SELECT * from tblpost as tp join category as c on tp.cat_id=c.cat_id where tp.post_Id='$id' ");
if($sql==true){
  while($row=mysqli_fetch_assoc($sql)){
    extract($row);
       echo "".$category."<br>";
      
    }
    

}
    
?></h3>
                </div> 
                 <div class="panel-body">
         
              
                
                            <?php

                include "../functions/db.php";
                     $id = $_GET['post_id'];
                     
                
                $sql = mysqli_query($con,"SELECT * from tblpost as tp join category as c on tp.cat_id=c.cat_id where tp.post_Id='$id' ");
                if($sql==true){
                  while($row=mysqli_fetch_assoc($sql)){
                    extract($row);
                    if($user_Id==9){
                       echo "<label>Topic Title: </label> ".$title."<br>";
                       echo "<label>Topic Category: </label> ".$category."<br>";
                       echo "<label>Date time posted: </label> ".$datetime;
                       echo "<p class='well'>".$content."</p>";
                       echo "<label>Posted By: </label> Admin";
                    }
                    else{
                      $sel = mysqli_query($con,"SELECT * from tbluser where user_Id='$user_Id' ");
                      while($row=mysqli_fetch_assoc($sel)){
                        extract($row);
                        echo "<label>Topic Title: </label> ".$title."<br>";
                       echo "<label>Topic Category: </label> ".$category."<br>";
                       echo "<label>Date time posted: </label> ".$datetime;
                       echo "<p class='well'>".$content."</p>";
                       //echo '<label>Posted By: </label>'.$fname.' '.$lname;
                      }
                      
                    }
                    
         
                }
                }
                
              
                    
              ?>

              <br><label>Comments</label><br>
              <div id="comments">
              <?php 
              $postid= $_GET['post_id'];
              $sql = mysqli_query($con,"SELECT * from tblcomment as c join tbluser as u on c.user_Id=u.user_Id where post_Id='$postid' order by datetime");
              $num = mysqli_num_rows($sql);
              if($num>0){
              while($row=mysqli_fetch_assoc($sql)){
                    echo "<label>Comment by: </label> ".$row['fname']." ".$row['lname']."<br>";
                     echo '<label class="pull-right">'.$row['datetime'].'</label>';
                     echo "<p class='well'>".$row['comment']."</p>";
              }

            }

              ?>
            </div>
              </div>
          </div>
          <hr>
            <div class="col-sm-5 col-md-5 sidebar">
          <h3>Comment</h3>
          <form method="POST">
            <textarea type="text" class="form-control" id="commenttxt"></textarea><br>
            <input type="hidden" id="postid" value="<?php echo $_GET['post_id']; ?>">
            <input type="hidden" id="userid" value="<?php echo $_SESSION['user_Id']; ?>">
            <input type="submit" id="save" class="btn btn-success pull-right" value="Comment">
          </form>
        </div>
    </div>


</body>
<script>

$("#save").click(function(){
var postid = $("#postid").val();
var userid = $("#userid").val();
var comment = $("#commenttxt").val();
var datastring = 'postid=' + postid + '&userid=' + userid + '&comment=' + comment;
if(!comment){
  alert("Please enter some text comment");
}
else{
  $.ajax({
    type:"POST",
    url: "../functions/addcomment.php",
    data: datastring,
    cache: false,
    success: function(result){
      document.getElementById("commenttxt").value=' ';
      $("#comments").append(result);
    }
  });
}
return false;
})

</script>
</html>