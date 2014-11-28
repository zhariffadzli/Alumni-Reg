<?php
error_reporting(0);
ob_start(); //very important must be placed in any php page if want to use the header function

if(isset($_POST['submit']))//if the user click the login button this statement will run
{
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $stud_id = $_POST['stud_id'];
  $address = $_POST['address'];
  $faculty = $_POST['faculty'];
  $country = $_POST['country'];
  $course = $_POST['course'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $contact = $_POST['contact'];

  //Enter required fill in register form
  if($firstname&&$lastname&&$username&&$password&&$stud_id&&$address&&$faculty&&$country&&$course&&$email&&$gender&&$contact)
  {
    
    mysql_connect("localhost", "root", "") or die(mysql_error()); 
    mysql_select_db("website_alumni") or die(mysql_error());
    
    $query = mysql_query("SELECT * FROM alumni where username_alumni = '".$username."'")or die(mysql_error());
    $row = mysql_fetch_array($query);
    
    $query2 = mysql_query("SELECT * FROM admin");
     $row2 = mysql_fetch_array($query2);
    
    if($username == $row['username_alumni'] || $username==$row2['username_admin'])
    {
?>
        <script type="text/javascript">
            alert("Sorry Username Has Been Choosen");
        </script>
<?php

    }
    else
    {
        
          $queryreg = mysql_query("
          
          INSERT INTO alumni VALUES ('','$username','$password ','$confirmpassword ','$firstname','$lastname','$email',     
                        '$stud_id','$gender','$faculty','$course','$address','$country','$contact')
          
          ");
?>    

          <script type="text/javascript">
            alert("Thank you for Registering Please login with your Username and Password");
            window.location.assign("Loginpage.php"); //this is when the user succesfully register this code will redirect you to the homepage
          </script>
<?php

    }
    
    
  }
  else
  {
?>

  <script type="text/javascript">
    alert("Fill all the required information!");
    </script>
    
<?php
  }

}
?>


<!DOCTYPE html>
<!-- saved from url=(0050)http://getbootstrap.com/examples/carousel/#contact -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./image/mmulogo.ico">

    <title>Alumni System</title>
    <script type ="text/javascript" src="validate.js"></script>
    <script type ="text/javascript">

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./Carousel Template for Bootstrap_files/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./Carousel Template for Bootstrap_files/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/carousel/carousel.css" rel="stylesheet">
  <style id="holderjs-style" type="text/css">

.back-to-top {
      position: fixed;
      bottom: 2em;
      right: 0px;
      text-decoration: none;
      color: #000000;
      background-color: rgba(235, 235, 235, 0.80);
      font-size: 12px;
      padding: 1em;
      display: none;
    }

    .back-to-top:hover {  
      background-color: rgba(135, 135, 135, 0.50);
    } 

</style></head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="http://getbootstrap.com/examples/carousel/#">Alumni <i>Perintis Multimedia</i></a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="http://getbootstrap.com/examples/carousel/#">Home</a></li>
                <li><a href="http://getbootstrap.com/examples/carousel/#about">About</a></li>
                <li><a href="./Carousel Template for Bootstrap_files/Carousel Template for Bootstrap.htm">Contact</a></li>
                <li class="dropdown">
                  <a href="http://getbootstrap.com/examples/carousel/#" class="dropdown-toggle" data-toggle="dropdown">Login <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu"></li>
                    <li><a href="http://getbootstrap.com/examples/carousel/#">Action</a></li>
                    <li><a href="http://getbootstrap.com/examples/carousel/#">Another action</a></li>
                    <li><a href="http://getbootstrap.com/examples/carousel/#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="http://getbootstrap.com/examples/carousel/#">Separated link</a></li>
                    <li><a href="http://getbootstrap.com/examples/carousel/#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
              <a class="btn btn-lg btn-primary" href="" role="button">Register</a>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Register part  ----------------------------------------------------------------------------------------------------------------       -->

<div class="col-lg-5 col-lg-push-1 col-md-5 col-md-push-1 col-sm-7 col-sm-push-1 col-xs-   
12">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
 
    <!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
 
  </head>
  <body>
    <div class="container" style="margin: 10px;">
      <div class="row"><h2>Register/Requesting to being Alumni member</h2>
  </div>
 
  <form name="frm" action="" role="form" method="post">
    

      <div class="form-group">
      <label for="username" class="col-md-2">
        Username:
      </label>
      <div class="col-md-10">
        <input type="text" name="username" maxlength="30" class="form-control" id="username" placeholder="Enter Username" value="<?php echo $username;?>">
      </div>

      <div class="form-group">
      <label for="password" class="col-md-2">
        Password:
      </label>
      <div class="col-md-10">
        <input type="password" class="form-control" id="password" placeholder="Enter Password" value="<?php echo $password;?>">
        <p class="help-block">
          Min: 6 characters (Alphanumeric only)
        </p>
      </div>

      <div class="form-group">
      <label for="confirmpassword" class="col-md-2">
        Confirm Password:
      </label>
      <div class="col-md-10">
        <input type="confirm password" class="form-control" id="confirmpassword" placeholder="Re-Enter Password" value="<?php echo $confirmpassword;?>">
        <p class="help-block">
          Min: 6 characters (Alphanumeric only)
        </p>
      </div>

      <label for="firstname" class="col-md-2">
        First Name:
      </label>
      <div class="col-md-10">
        <input type="text" name="firstname" maxlength="30" class="form-control" id="firstname" placeholder="Enter First Name" value="<?php echo $firstname;?>">
      </div>
 
 
    </div>
 
    <div class="form-group">
      <label for="lastname" class="col-md-2">
        Last Name:
      </label>
      <div class="col-md-10">
        <input type="text" name="lastname" maxlength="30" class="form-control" class="form-control" id="lastname" placeholder="Enter Last Name" value="<?php echo $lastname;?>">
      </div>
 
 
    </div>
 
 <div class="form-group">
    <label for="birthday" class="col-xs-2 control-label">Birthday</label>
    <div class="col-xs-10">
        <div class="form-inline">
            <div class="form-group">
                <input type="text" maxlength="4" class="form-control" placeholder="year"/>
            </div>
            <div class="form-group">
                <input type="text" maxlength="2" class="form-control" placeholder="month"/>
            </div>
            <div class="form-group">
                <input type="text" maxlength="2" class="form-control" placeholder="day"/>
            </div>
        </div>
    </div>
</div>

    <div class="form-group">
      <label for="emailaddress" class="col-md-2">
        Email address:
      </label>
      <div class="col-md-10">
        <input type="email" class="form-control" id="emailaddress" placeholder="Enter email address" value="<?php echo $email;?>">
        <p class="help-block">
          Example: daus@legend.com
        </p>
      </div>

 
    </div>
 
 <div class="form-group">
      <label for="stud_id" class="col-md-2">
        Student ID:
      </label>
      <div class="col-md-10">
        <input type="text" name="stud_id" maxlength="10" class="form-control" id="stud_id" placeholder="Student ID" value="<?php echo $stud_id;?>">
      </div>
    </div>

<!-- <div class="form-group">
      <label for="faculty" class="col-md-2">
        Faculty:
      </label>
      <div class="col-md-10">
        <select name="faculty" name="faculty" id="faculty" class="form-control">
          <option <?php if($state == "please select") echo "selected "; ?> value="faculty not select">--Please Select--</option>
          <option <?php if($state == "FCI") echo "selected "; ?> value="India">FCI</option>
          <option <?php if($state == "FOM") echo "selected "; ?> value="United States">FOM</option>
          <option <?php if($state == "FOE") echo "selected "; ?> value="Canada">FOE</option>
          <option <?php if($state == "FCM") echo "selected "; ?> value="United Kingdom">FCM</option>
          <option <?php if($state == "FIST") echo "selected "; ?> value="Malaysia">FIST</option>
          <option <?php if($state == "FBL") echo "selected "; ?> value="Japan">FBL</option>
          <option <?php if($state == "CDP") echo "selected "; ?> value="Korea">CDP</option>
          <option <?php if($state == "Postgraduate") echo "selected "; ?> value="Indonesia">Postgraduate</option>
        
      </div>
  </div> -->

    <div class="form-group" name="gender">
      <label for="gender" class="col-md-2">
        Gender
      </label>
      <div class="col-md-10">
        <label class="radio">
          <input <?php if($gender == "male") echo "selected "; ?> type="radio" name="sex" id="sex" value="male" checked>
          Male
        </label>
        <label class="radio">
          <input <?php if($gender == "female") echo "selected "; ?> type="radio" name="sex" id="sex" value="female">
          Female
        </label>
      </div> 
 
    </div>
 <div class="form-group" name="faculty">
      <label for="faculty" class="col-md-2" name="faculty">
        Faculty:
      </label>
      <div class="col-md-10">
        <select name="faculty" name="faculty" id="faculty" class="form-control">
          <option <?php if($faculty == "please select") echo "selected "; ?> value="faculty not select">--Please Select--</option>
          <option <?php if($faculty == "FCI") echo "selected "; ?> value="India">FCI</option>
          <option <?php if($faculty == "FOM") echo "selected "; ?> value="United States">FOM</option>
          <option <?php if($faculty == "FOE") echo "selected "; ?> value="Canada">FOE</option>
          <option <?php if($faculty == "FCM") echo "selected "; ?> value="United Kingdom">FCM</option>
          <option <?php if($faculty == "FIST") echo "selected "; ?> value="Malaysia">FIST</option>
          <option <?php if($faculty == "FBL") echo "selected "; ?> value="Japan">FBL</option>
          <option <?php if($faculty == "CDP") echo "selected "; ?> value="Korea">CDP</option>
          <option <?php if($faculty == "Postgraduate") echo "selected "; ?> value="Indonesia">Postgraduate</option>
      </div>
  </div> 

<div class="form-group">
      <label for="username" class="col-md-2">
        Course:
      </label>
      <div class="col-md-10">
        <input type="text" name="course" maxlength="30" class="form-control" id="course" placeholder="course" value="<?php echo $course;?>">
      </div>

<div class="form-group" name="Address">
      <label name:"address" for="address" class="col-md-2">
        Address
      </label>
      <div class="col-md-10">
        <input type="text" name="address" class="form-control" id="address" placeholder="address" value="<?php echo $address;?>">
      </div>
 
 
    </div>
 
    <div class="form-group">
      <label for="country" class="col-md-2">
        Country:
      </label>
      <div class="col-md-10">
        <select name="country" name="state" id="state" class="form-control">
          <option <?php if($country == "country not select") echo "selected "; ?> value="country not select">--Please Select--</option>
          <option <?php if($country == "Indian") echo "selected "; ?> value="India">India</option>
          <option <?php if($country == "United Stated") echo "selected "; ?> value="United States">United States</option>
          <option <?php if($country == "Canada") echo "selected "; ?> value="Canada">Canada</option>
          <option <?php if($country == "United Kingdom") echo "selected "; ?> value="United Kingdom">United Kingdom</option>
          <option <?php if($country == "Malaysia") echo "selected "; ?> value="Malaysia">Malaysia</option>
          <option <?php if($country == "Japan") echo "selected "; ?> value="Japan">Japan</option>
          <option <?php if($country == "Korea") echo "selected "; ?> value="Korea">Korea</option>
          <option <?php if($country == "Indonesia") echo "selected "; ?> value="Indonesia">Indonesia</option>
          <option <?php if($country == "Thailand") echo "selected "; ?> value="Thailand">Thailand</option>
          <option <?php if($country == "Others") echo "selected "; ?> value="Others">Others</option>
        </select>
      </div>
 <div class="form-group">
      <label for="stud_id" class="col-md-2">
        Contact :
      </label>
      <div class="col-md-10">
        <input type="text" name="contact" maxlength="10" class="form-control" id="contact" placeholder="contact" value="<?php echo $contact;?>">
      </div>
    </div>
 
 
 
    </div>
 
    <div class="form-group">
      <label for="uploadimage" class="col-md-2">
        Upload Image:
      </label>
      <div class="col-md-10">
        <input type="file" name="uploadimage" id="uploadimage">
        <p class="help-block">
          Allowed formats: jpeg, jpg, gif, png
        </p>
      </div>
 
 
    </div>
 
    <div class="checkbox">
      <div class="col-md-2">
      </div>
      <div class="col-md-10">
        <label>
          <input type="checkbox">Terms and Conditions</label>
      </div>
 
 
    </div>
 
    <div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-10">
        <button type="submit" class="btn btn-info" onClick="return validateForm()">
          Register
        </button>
      
      </div>
    </div>
  </form>
  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.js"></script>
 
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</div>
</div>
</div>


<!-- END      Register part  ----------------------------------------------------------------------------------------------------------------       -->
      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
        
        </div>
        
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
  
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>© 2014 Company, Inc. · <a href="http://getbootstrap.com/examples/carousel/#">Privacy</a> · <a href="http://getbootstrap.com/examples/carousel/#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Carousel Template for Bootstrap_files/jquery.min.js"></script>
    <script src="./Carousel Template for Bootstrap_files/bootstrap.min.js"></script>
    <script src="./Carousel Template for Bootstrap_files/docs.min.js"></script>

    <script>            
      jQuery(document).ready(function() {
        var offset = 220;
        var duration = 500;
        jQuery(window).scroll(function() {
          if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
          } else {
            jQuery('.back-to-top').fadeOut(duration);
          }
        });
        
        jQuery('.back-to-top').click(function(event) {
          event.preventDefault();
          jQuery('html, body').animate({scrollTop: 0}, duration);
          return false;
        })
      });
    </script>
  

<div id="global-zeroclipboard-html-bridge" class="global-zeroclipboard-container" title="" style="position: absolute; left: 0px; top: -9999px; width: 15px; height: 15px; z-index: 999999999;" data-original-title="Copy to clipboard">      
  <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" id="global-zeroclipboard-flash-bridge" width="100%" height="100%">         
    <param name="movie" value="/assets/flash/ZeroClipboard.swf?noCache=1406097638875">         
    <param name="allowScriptAccess" value="sameDomain">         
    <param name="scale" value="exactfit">         
    <param name="loop" value="false">         
    <param name="menu" value="false">         
    <param name="quality" value="best">         
    <param name="bgcolor" value="#ffffff">         
    <param name="wmode" value="transparent">         
    <param name="flashvars" value="trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com">         
    <embed src="/assets/flash/ZeroClipboard.swf?noCache=1406097638875" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="100%" height="100%" name="global-zeroclipboard-flash-bridge" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com" scale="exactfit">                
    </object></div></body></html>