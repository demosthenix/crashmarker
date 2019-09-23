<?php
 define('DB_HOST', 'sql209.epizy.com'); 
 define('DB_NAME', 'epiz_24524195_libs');
 define('DB_USER','epiz_24524195');
 define('DB_PASSWORD','aBL3VmpeeB5'); 
 function SignIn() { 
		$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error($conn));
        $db=mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($conn));
		session_start(); 
		$x=$_POST['Username'];
		$y=$_POST['pass'];
		if(empty($x) AND empty($y))
		{
			echo "ENTER USERNAME AND PASSWORD..........";
		}
		else if(empty($y))
		 {
			 echo "ENTER A PASSWORD.........";
		 }
		 else if(empty($x))
		 {
			 echo "ENTER A USERNAME.........";
		 }
		else if(!empty($x)) 
		       { 
					$y = md5($y);
		         $sql="SELECT * FROM tabs where Username ='$x' AND Password ='$y'";
		         $query = mysqli_query($conn,$sql); 
				 $row = mysqli_fetch_array($query);
				 
				if(!empty($row['Username']) AND !empty($row['Password'])) 
				   {
					   $_SESSION['Username'] = $row['Username'];
					   echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...   ".$_SESSION['Username'];
					   header("location:library.html");
				   } 
				else 
				  { 
					 echo "SORRY... YOU ENTERD WRONG ID OR PASSWORD... PLEASE RETRY...";
				  }  
			}
 }			
	   if(isset($_POST['submit'])) 
	       { 
	          SignIn(); 
		    } 
?>

