<?php    include("connect.php");

if (isset($_POST["logbtn"]))
{
  $username = $_POST["username"];
  $password = $_POST["password"];
  $choice = $_POST["choice"];
  
  if($choice == "alumni")
{
  $result = mysql_query("select * from alumni where username_alumni = '$username' and password_alumni = '$password'");
  
  if ($row = mysql_fetch_assoc($result))
  {
    $_SESSION["session_mid"] = $row["member_id"];
    $_SESSION["session_mname"] = $row["member_name"];
    header("Location:alumni.htm");
  }
  else
  {
  ?>
    <script type = "text/javascript">
      alert("Invalid Username and Password");
    </script>
  <?php
  }
}
else
{
  $result1 = mysql_query("select * from admin where admin_username = '$username' and admin_password = '$password'");
  
  if ($row1 = mysql_fetch_assoc($result1))
  {
    $_SESSION["session_aid"] = $row1["admin_id"];
    $_SESSION["session_aname"] = $row1["admin_name"];
    header("Location:Admin_register.htm");
  }
  else
  {
  ?>
    <script type = "text/javascript">
      alert("Invalid Username and Password");
    </script>
  <?php
  }
}
}

if (isset($_POST["forgotbtn"]))
{
  $forgotemail = $_POST["forgotemail"];
  $scqst = $_POST["scqst"];
  $scans = $_POST["scans"];
  
  $result2 = mysql_query("select * from member where member_email = '$forgotemail'");
  
  if ($row2 = mysql_fetch_assoc($result2))
  {
    $result3 = mysql_query("select * from member where member_scqst = '$scqst' and member_scans = '$scans'");
    if  ($row3 = mysql_fetch_assoc($result3))
    {
      $_SESSION["session_memid"] = $row3["member_id"];
      ?>
        <script type="text/javascript">
          alert("All match!");
        </script>
      <?php
      header("Location:password.php");
    }
    else
    {
      ?>
        <script type="text/javascript">
          alert("Question and Answer Not Match!");
        </script>
      <?php
    }
  }
  else
  {
  ?>
    <script type="text/javascript">
      alert("Email Address Not Match!");
    </script>
  <?php
  }
}

if (isset($_POST["valbtn"]))
{
  $studid = $_POST["studid"];
  $valname = $_POST["valname"];
  $result4 = mysql_query("select * from member where student_id = '$studid'");
  if ($row4 = mysql_fetch_assoc($result4))
  {
?>
    <script type="text/javascript">
      alert("Sorry, this ID had created an account.");
    </script>
<?php
  }
  else
  {
    $result5 = mysql_query("select * from student where student_id = '$studid'");
    if ($row5 = mysql_fetch_assoc($result5))
    {
      $result6 = mysql_query("select * from student where student_id = '$studid' and student_name = '$valname'");
      if ($row6 = mysql_fetch_assoc($result6))
      {
        $_SESSION["session_sid"] = $row5["student_id"];
        header("Location:register.php");
      }
      else
      {
        ?>
          <script type="text/javascript">
            alert("Sorry! Student ID and Name Not Matched!");
          </script>
        <?php
      }
    }
    else
    {
      ?>
        <script type="text/javascript">
          alert("Sorry! Student ID not found!");
        </script>
      <?php
    }
  }
}
?> 


<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Sign in </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link rel="stylesheet" type="text/css"
href="bootstrap.css" />
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link rel="stylesheet" type="text/css"
href="bootstrap-responsive.css" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    
  </head>

  <body>

    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" class="input-block-level" placeholder="Email address">
        <input type="password" class="input-block-level" placeholder="Password">
        <div class="form-group" name="select_user">
      <label class="checkbox">
        select user
      </label>
      <div class="col-md-10">
          
          <input type="radio" name="choice" value="admin" id="admin" checked>
          <label for="admin">admin</label>

          
          <input type="radio" name="choice" value="President/Manager" id="president_manager">
          <label for="president_manager">President or Manager</label>
          
        
          <input type="radio" value="Alumni" name="choice" id="alumni">
          <label for="alumnni">Alumni</label>
      </div> 
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>

        <button name="logbtn" class="btn btn-large btn-primary" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./signin_files/jquery.js"></script>
    <script src="./signin_files/bootstrap-transition.js"></script>
    <script src="./signin_files/bootstrap-alert.js"></script>
    <script src="./signin_files/bootstrap-modal.js"></script>
    <script src="./signin_files/bootstrap-dropdown.js"></script>
    <script src="./signin_files/bootstrap-scrollspy.js"></script>
    <script src="./signin_files/bootstrap-tab.js"></script>
    <script src="./signin_files/bootstrap-tooltip.js"></script>
    <script src="./signin_files/bootstrap-popover.js"></script>
    <script src="./signin_files/bootstrap-button.js"></script>
    <script src="./signin_files/bootstrap-collapse.js"></script>
    <script src="./signin_files/bootstrap-carousel.js"></script>
    <script src="./signin_files/bootstrap-typeahead.js"></script>

  

</body></html>