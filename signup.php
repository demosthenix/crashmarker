<?php
 define('DB_HOST','sql209.epizy.com'); 
 define('DB_NAME','epiz_24524195_libs');
 define('DB_USER','epiz_24524195');
 define('DB_PASSWORD','aBL3VmpeeB5');
    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());
    $db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());
    if(isset($_POST["Username"]))
    {
        $x=$_POST["Username"];
        $sql1="SELECT * FROM tabs WHERE Username ='$x'";
        $query1 = mysqli_query($conn,$sql1);
        echo mysqli_num_rows($query1);
    }
    if(isset($_POST["Email"]))
    {
        $x=$_POST["Email"];
        $sql2="SELECT * FROM tabs WHERE Email ='$x'";
        $query2 = mysqli_query($conn,$sql2);
        echo mysqli_num_rows($query2);
    }
    if(isset($_POST["Contact"]))
    {
        $x=$_POST["Contact"];
        $sql3="SELECT * FROM tabs WHERE Phone ='$x'";
        $query3 = mysqli_query($conn,$sql3);
        echo mysqli_num_rows($query3);
    }
if(isset($_POST['submit']))
{
	$Name = $_POST['name'];
	$Username = $_POST['Username'];
	$Email = $_POST['email'];
	$Phone = $_POST['contact'];
	$DOB = $_POST['dob'];
	$Password =md5 ($_POST['pass']);
	$query = "insert into tabs values('$Name','$Username','$Email','$Phone','$DOB','$Password')";
    $data = mysqli_query($conn,$query)or die("Error: ".mysqli_error($conn));
	if($data){
        session_start();
        $_SESSION['Username'] = $Username;
        header("location:library.php");
    }

}
?>
