


<center>
<html>
<head>
<title>Test Form</title>
</head>
<body>
<h1> CSS Minify</h1>
<form action="" method="post">
<p>Website URL:

<textarea rows="10px" cols="30px" name="love0" >
 </textarea>
<input name="submit" type="submit" value="Submit">
</form>
</body>
</html>
<?php

if(isset($_POST['submit'])){
   $love0 = $_POST['love0'];

$love0 = trim(preg_replace('/\s+/',' ', $love0));



?>


<textarea rows="10px" cols="30px">

<?php   
echo $love0; ?>

 </textarea>


<?php  }  ?>


</center>