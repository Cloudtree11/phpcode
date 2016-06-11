<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php
//phpinfo();
//echo $_SERVER['HTTP_USER_AGENT']; 
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
 ?>
 <h3>strpos() doesn't return FALSE</h3>
 <p>Using Internet Explorer</p>
 <?php
} else {
 ?>
 <h3>strpos() return FALSE</h3>
 <center><b>Not using Internet Explorer</b></center>
 <?php
 }
 ?>
 </body>
</html>
