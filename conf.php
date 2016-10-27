<!DOCTYPE html>
<html lang="en">
<head>
  <title>Voter Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
body {
	background-color: #BFD4D9;
}
.text_box {
	padding: 2%;
}
.form_full {
	padding: 5%;
	background-color: #ffffff;
	border-radius: 10px;
	margin-bottom: 10px;
}
.jumbotron {
    /*background-color: #f4511e; */ /* Orange */
    background-color: #638CA6;
    color: #ffffff;
}
</style>

<script>
 $(document).ready(function(){
    $(".sub_but").click(function(){
        <?php
            $_SESSION['dog'] = 'yay!';
        ?>
    });
}); 
</script>

</head>
<body>
<div class="container">

	<div class="jumbotron text-center">
  <h1>Voter Registration</h1>
  <p>Please fill out this form to register, stupid.</p>
  </div>

  <br>

  <div class="form_full">

  <div id="panel1">
  <?php
  session_start();
  echo 'Session fname:';
    if (!isset($_POST['fname'])){
    header("Location: http://localhost/vote/voting_main_php.php");
    //header("Location: http://www.google.com");
    exit;
  }

  echo 'Hello, ';
  echo $_POST['n_suf'], ' ';
  echo $_POST['fname'], ' ';
  echo $_POST['mname'], ' ';
  echo $_POST['lname'], '!';
  echo "<br>";
  echo $_POST['dob'];
  echo "<br>";
  $_SESSION['ses_n_suf'] = $_POST['n_suf'];
  $_SESSION['ses_fname'] = $_POST['fname'];
  $_SESSION['ses_mname'] = $_POST['mname'];
  $_SESSION['ses_lname'] = $_POST['lname'];
  $_SESSION['ses_dob'] = $_POST['dob'];


  echo $_SESSION['ses_n_suf'], ' ';
  echo $_SESSION['ses_fname'], ' ';
  echo $_SESSION['ses_mname'], ' ';
  echo $_SESSION['ses_lname'], '!';
  echo "<br>";
  echo $_SESSION['ses_dob'], ' ';
    echo "<br>";


  print session_id();


?>

</div>




</div>
</div>
  <?php
  if (isset($_SESSION['foo'])){
  // $_SESSION = array();
   //session_destroy();
  echo 'done!';
  }
  else { echo 'nope!'; }
?>

</body>
</html>