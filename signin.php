
<?php
 define('DB_HOST', 'sql209.epizy.com'); 
 define('DB_NAME', 'epiz_24524195_libs');
 define('DB_USER','epiz_24524195');
 define('DB_PASSWORD','aBL3VmpeeB5'); 
        //$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error($conn));
        //$db=mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($conn)); 
        /*if(isset($_POST["Username"]))
        {
            $x=$_POST["Username"];
            $sql1="SELECT * FROM tabs WHERE Username ='$x'";
            $query1 = mysqli_query($conn,$sql1);
            echo mysqli_num_rows($query1);
        }*/
        /*if(isset($_POST["Pass"]))
        {
            $x=$_POST["Login_Username"];
            $y=$_POST["Pass"];
            $y = md5($y);
            $sql2="SELECT * FROM tabs WHERE Username ='$x'";
            $query2 = mysqli_query($conn,$sql2);
            $row = mysqli_fetch_array($query2);
            $zero = 0;
            if(empty($x)){
                echo "no";
            }
            else if($row['Password'] == $y){
                echo mysqli_num_rows($query2);
            }
            else{
                echo $zero;
            }
        }*/
 function SignIn() { 
		
		$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error($conn));
        $db=mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($conn)); 
		$x=$_POST['Username'];
        $y=$_POST['pass'];
		if(!empty($x)) 
		{ 
				 $y = md5($y);
		         $sql="SELECT * FROM tabs where Username ='$x' AND Password ='$y'";
		         $query = mysqli_query($conn,$sql); 
				 $row = mysqli_fetch_array($query);
				 
				if(!empty($row['Username']) AND !empty($row['Password'])) 
				   {
                       session_start();
					   $_SESSION['Username'] = $row['Username'];
					   //echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...   ".$_SESSION['Username'];
					   header("location:library.php?Username=$x");
				   } 
				else 
				  { 
					//echo "III";
                     header("location:redirect.php");
				  }  
	    }
 }			
if(isset($_POST['submit'])) 
    { 
        SignIn(); 
    } 
?>