<?php
	if(isset($_POST['submit']))
	{
		$content = $_POST['content'];
		if(empty($content))
		{
			$error = 'Please enter some content to create your Pdf';
		}
		else
		{
			include_once('dompdf_config.inc.php');

      $html = '<!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="utf-8">
          <style type="text/css">
           h2{
               color: red;
           }
           </style>
      </head>
      <body>
           <div id="mainWrapper">
           <table style="margin-left: auto; margin-right: auto">
           <tr>
           <td><h2> Alumni MMU Report </h2></td>
           </tr>
           <tr>
           <td>'.$content.'</td>
           </tr>
           </table>
           </div><!--end mainWrapper-->
      </body>
      </html>';

			$dompdf = new DOMPDF();
			$dompdf->load_html($html);
			$dompdf->render();
			$dompdf->stream('Alumni Report.pdf');
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<link rel="icon" href="./www/images/mmulogo.ico">
<title>Generate Report</title>
<style type="text/css">
  html {
  	background-color: #F0F0F0;
  	background-image: -moz-radial-gradient(circle closest-corner, #FFFFFF 0%, #DDDDDD 100%)
  }

  form {
  	  margin: 174px auto 0;
  	  text-align: center;
  	  width: 668px;

  }
  textarea{
  	border: 1px solid #C8C8C8;
  	border-radius: 6px 6px 6px 6px;
  	height: 232px;
  	margin-bottom: 19px;
  	padding: 10px;
  	width: 500px;
  }

  	.myButton {
  		background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #79bbff 5%, #63b1ff 100%));
  		background: -moz-linear-gradient(center top, #79bbff 5%, #63b1ff 100%);
  		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#63b1ff');
  		background-color: #79bbff;
  		-moz-border-radius:6px;
  		-webkit-border-radius:6px;
  		border-radius: 6px;
  		border: 1px solid #84bbf3;
  		display: inline-block;
  		color: #FFFFFF;
  		font-family: Verdana;
  		font-size: 13px;
  		font-weight: bold;
  		padding: 4px 16px;
  		text-decoration: none;
  		text-shadow:1px 1px 0px #528ecc;
  	}
  	.myButton:hover {
  		background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #63b1ff 5%, #79bbff 100%));
  		background: -moz-linear-gradient(center top, #63b1ff 5%, #79bbff 100%);
  		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#63b1ff', endColorstr='#79bbff');
  		background-color: #63b1ff;

  	}
  	.myButton:active {
  		position: relative;
  		top: 1px;
  	}

  	</style>
</head>

<body>
	<div id="mainWrapper">

        <?php if(isset($error))  {echo $error;} ?>

	    <form method="post" action="index.php">
	    	<textarea name="content" id="content"></textarea>
	    	<br />
	    	<input type="submit" name="submit" id="submit" value="Generate Report to PDF File" class="myButton"/>
	    </form>

	</div><!--end mainWrapper-->
</body>

</html>