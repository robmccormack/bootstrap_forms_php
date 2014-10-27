<?php
// set up some variables
$Name = strip_tags(trim( $_GET['txtName']));

$Password = $_GET['pasPassword'];
$Notes = $_GET['txtNotes'];
$Sex = $_GET['radSex'];
$Age = $_GET['selAge'];

$Favorite = $_GET['colFavorite'];

$Experience0 = $_GET['chkExperience-0'];
$Experience1 = $_GET['chkExperience-1'];
$Experience2 = $_GET['chkExperience-2'];





// if the name is Nathan ... or any variation in capitals.... then redirect to a cool car site

// ??? do sanitation

echo $Name;
echo $Password;
echo $Age;
echo $Notes;
echo $Sex;
echo $Experience0;
echo $Favorite;



 $aDoor = $_GET['formDoor'];
  if(empty($aDoor))
  {
    echo("You didn't select any buildings.");
  }
  else
  {
    $N = count($aDoor);

    echo("You selected $N door(s): ");
    for($i=0; $i < $N; $i++)
    {
      echo($aDoor[$i] . " ");
    }
  }



?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

 <!--
___________________________________________________________________
   __  __        __  __
  |  \/  |_ _   |  \/  |
  | |\/| | '_|  | |\/| |_
  |_|  |_|_|(_) |_|  |_(_)

  Project:....:  Sample Bootstrap template with HTML forms
  Version.....:  0.1
  Bootstrap...:   v3.2.0

  Author......: Mr. McCormack - Confederation College
  Copyright...: (c) 2014 Mr. McCormack
  License.....: Code licensed under MIT, documentation under CC BY 3.0.

  Temp. Debug.: ???

  Created.....: 2014.10.25
  Updated.....: 2014.10.25

  Reference...: http://getbootstrap.com/examples/signin/  (example)


  Notes.......:  For IM 315 Course

___________________________________________________________________
 -->

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <title>Signin Template for Bootstrap</title>

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



<style type="text/css">
<!-- Style for form -->
body {
  padding-top: 40px;
  padding-bottom: 40px;

<?php
// write out the background-color:  for the page from variables

   echo  'background-color: #' . $Favorite . ';';
?>

}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}

.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}

</style>

</head>

  <body>

<div class="container">
<hr>
<img src="http://getbootstrap.com/favicon.ico" alt="bootstrap logo" >
<h2>Example Form <small>using PHP</small></h2>
<p>
This example will show you how to get a form with a php script to work.
Without a bit of code, your form will not submit to the <code>action="" </code>.
The code you will need is  for jQuery, since Bootstrap uses jQuery.
</p>


<!-- START HTML form -->

<!--
Notes:
- form elements are prefix with lower case, 3 letters, like txtEmail
- this convention makes it easy to work with forms and program PHP script

 -->



    </div> <!-- /container -->


    <div class="container">
      <!-- Three columns of text below the form - just an example -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>

        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


<hr>
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->



    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
