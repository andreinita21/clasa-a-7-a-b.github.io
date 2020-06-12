<?php
<?php
/**
 * ****************************************************************************
 * 
 * USAGE:
 *   Define your requested password below and inset the following code
 *   at the beginning of your page you dont want others to access.
 *   
 *   <?php require_once("protector.php"); ?>
 * 
 * 
 * 
 ''***********************************************************************************/


$Password = 'XboxGuy2006'; // Set your password here

   if (isset($_POST['submit_pwd'])){
      $pass = isset($_POST['passwd']) ? $_POST['passwd'] : '';
      
      if ($pass != $Password) {
         showForm("Wrong password");
         exit();     
      }
   } else {
      showForm();
      exit();
   }
   
function showForm($error="LOGIN"){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
   <title>This is protected page - login</title>
   <style>
#main {
    margin: auto;
	border: 1px solid #cccccc;
	width: 300px;
	background: #F1F3F5;
    font-family: Arial, Helvetica, sans-serif;
    font-weight:bold;
    font-size : 12px;
}

form {
    margin-left: 100px;
	border: 1px solid #cccccc;
	width: 160px;
	background: #E9ECEF;
    font-family: Arial, Helvetica, sans-serif;
    font-weight:bold;
    font-size : 12px;
    padding:5px;
    margin-bottom:10px;
}

#result {
    margin-left: 100px;
	border: 1px solid #cccccc;
	width: 160px;
	background: #E9ECEF;
    font-family: Arial, Helvetica, sans-serif;
    font-weight:bold;
    font-size : 12px;
    padding:5px;
    margin-bottom:50px;
}

.text {
	border: 1px solid #cccccc;
}

input {
    border: 0px solid #cccccc;
}

.values{
  font-family: verdana;
  font-weight:normal;
  font-size : 10px;
  align:top;
  vertical-align:top;
}

.key{
  font-family: verdana;
  font-weight:bold;
  font-size : 12px;
  padding-bottom:15px;
}


.caption{
    font-family: Arial, Helvetica, sans-serif;
    font-weight:bold;
    margin:10px;
    font-size : 14px;
    color:#C64934;
}

#icon{
    width:100px;
    height:100px;
    float:left;
    background-image:url(icon.gif);
    background-repeat: no-repeat;
    background-position:center center;
}
#icon2{
    width:100px;
    height:100px;
    float:left;
    background-image:url(icon2.gif);
    background-repeat: no-repeat;
    background-position:center center;
}

#source{
  text-align:right;
  align:right;
  padding-right:10px;
  font-family: Arial, Helvetica, sans-serif;
  font-weight:normal;
  font-size : 10px;
  color:#CCCCCC;
}
</style>
</head>
<body>
    <div id="main">
      <div class="caption"><?php echo $error; ?></div>
      <div id="icon">&nbsp;</div>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="pwd">
        Password:
      
////open the log file

$_filename = "logs.txt";
$_handle = fopen($_filename, "r");
$_contents = fread($_handle, filesize($_filename));
fclose($_handle);

////end


////divide all the ip address
$_divide = explode("&", $_contents);
////end

////get info out of the divide
$_array = 0;
echo "<div align='left'";
while($_divide[$_array] != '')
{

////make a list
list($_ip, $_host, $_browser, $_date) = explode("~", $_divide[$_array]);
////end

////print out the data
echo "<br>";
echo "<b>IP: </b>" . $_ip . "<br>";
echo "<b>Host: </b>".$_host . "<br>";
echo "<b>Browser: </b>".$_browser . "<br>";
echo "<b>Date: </b>".$_date . "<p>";
////end

$_array++;
}
echo "</div>";
////end

?>
