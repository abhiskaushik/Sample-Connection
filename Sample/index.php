<?php 

require ('app/init.php');

if(isset($_POST['submit'])) {
 
	if(empty($_POST['name'])){
 
		$errors[] = 'This is required.';
 
	}
      
      if(empty($errors) === true){
		
		$name 	= htmlentities($_POST['name']);

           $msg= $main->check_db_connection($name);
             echo $msg;
           exit();
      }


}

?>
<html >
<head>
	
	
	<title>Sample Connection Test</title>
</head>
<body bgcolor="lightblue">

<form method="post" action="">
    <h1 align="center" >DELTA Inductions 2015</h1>
       <h2>(Sample Php Coding Standard)</h2>
			<h4>Check Db Connection:</h4>
			<input type="text" name="name" placeholder="enter your name"/>
                 
			<input type="submit" name="submit" value="Check" />
</form>
	
</body>
</html>
