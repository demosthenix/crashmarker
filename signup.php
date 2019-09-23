<?php
 define('DB_HOST','sql209.epizy.com'); 
 define('DB_NAME','epiz_24524195_libs');
 define('DB_USER','epiz_24524195');
 define('DB_PASSWORD','aBL3VmpeeB5'); 
  function NewUser()
{
	$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());
	$db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());
	$Name = $_POST['name'];
	$Username = $_POST['Username'];
	$Email = $_POST['email'];
	$Phone = $_POST['phone'];
	$Gender = $_POST['gen'];
	$DOB = $_POST['dob'];
	$Password =md5 ($_POST['pass']);
	$query = "insert into tabs values('$Name','$Username','$Email','$Phone','$Gender','$DOB','$Password')";
	
	$data = mysqli_query($conn,$query)or die("Error: ".mysqli_error($conn));
	if($data)
	{
		
	echo "YOUR REGISTRATION IS COMPLETED...";
	echo "<center><br><a href ='login.html'>Log In</a></center>";
	}
}
function SignUp()
{
	$x=$_POST['Username'];
	$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());
	$db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());
if(!empty($x))   
{   

    $sql="SELECT * FROM tabs WHERE Username = '$x'"; 
	$query = mysqli_query($conn,$sql);
	if(!$row = mysqli_fetch_array($query))
	{
		newuser();
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
}
}
if(isset($_POST['submit']))
{
	SignUp();
}
?>
