<?php
    define('DB_HOST', 'sql209.epizy.com'); 
    define('DB_NAME', 'epiz_24524195_libs');
    define('DB_USER','epiz_24524195');
    define('DB_PASSWORD','aBL3VmpeeB5');
    if(isset($_POST['submit']))
    {
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error($conn));
        $db=mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($conn));
        session_start();
        $x = $_SESSION['Usernamepass'];
    
        $p = $_POST['pass'];
        $p = md5($p);
        $sql = "UPDATE tabs SET Password='$p' WHERE Username='$x'";
        if(mysqli_query($conn, $sql))
        { 
            header("location:library.php");
        }
        else
        {
           echo "Error updating record: " . mysqli_error($conn);
        }
    }

//echo  "Hi";

?>
