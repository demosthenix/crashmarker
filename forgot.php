<?php
    define('DB_HOST', 'sql209.epizy.com'); 
    define('DB_NAME', 'epiz_24524195_libs');
    define('DB_USER','epiz_24524195');
    define('DB_PASSWORD','aBL3VmpeeB5');
function sendOTP($y){
        

        date_default_timezone_set('Asia/Kolkata');

            // Edit this path if PHPMailer is in a different location.
            require './PHPMailer/class.phpmailer.php';
            $otp = mt_rand(10000,99999);
            setcookie("otp",$otp);
            $mail = new PHPMailer;
            //$mail->isSMTP();
            $mssg = "Your OTP is : ".$otp;
            /*
            * Server Configuration
            */

            $mail->Host = 'smtp.gmail.com'; // Which SMTP server to use.
            $mail->Port = 465; // Which port to use, 465 is the default port for SSL security.
            $mail->SMTPSecure = 'ssl'; // Which security method to use.
            $mail->SMTPAuth = true; // Whether you need to login. This is almost always required.
            $mail->Username = "crashmarker.markify.sendmark@gmail.com"; // Your Gmail address.
            $mail->Password = "crashmarker1admin"; // Your Gmail login password or App Specific Password.
            
            /*
            * Message Configuration
            */

            $mail->setFrom('crashmarker.markify.sendmark@gmail.com', 'Crash Marker'); // Set the sender of the message.
            $mail->addAddress($y); // Set the recipient of the message.
            $mail->Subject = 'PHPMailer GMail SMTP test'; // The subject of the message.

            /*
            * Message Content - Choose simple text or HTML email
            */
            
            // Choose to send either a simple text email...
            //$mail->Body = 'This is a plain-text message body'; // Set a plain text body.

            // ... or send an email with HTML.
            $mail->msgHTML($mssg);
            // Optional when using HTML: Set an alternative plain text message for email clients who prefer that.
            //$mail->AltBody = 'This is a plain-text message body'; 

            // Optional: attach a file
            //$mail->addAttachment('images/phpmailer_mini.png');
            $res = $mail->send();
            //echo $res;
            
            if ($res) {
                return $res;
            } else {
                echo "Mailer Error: " . $mail->ErrorInfo;
            }
}
if(isset($_POST['submit']))
{
    $msg="";
    $conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error($conn));
    $db=mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($conn));
    $x = $_POST['Username'];
    $y = $_POST['email'];
    $sql = "SELECT * FROM tabs WHERE Username = '$x'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($query);
    if(empty($result['Username']))
    {
        $msg = "New User, First Register <a href='index.php'>Here</a>";
    }
    else if($result['Email'] != $_POST['email'])
    {
        $msg="Your account is not linked with this mail id please enter correct Mail Id";
    }
    else if($result['Email'] == $_POST['email'])
    {
        session_start();
        $_SESSION['Usernamepass'] = $x;
        $otp_status = sendOTP($y);
        echo $otp_status;
        /*if($otp_status == 1)
        {
            header("location:verifyotp.php");
        }*/
        /*
        else{
                $msg = "Something Going Wrong....";
        }*/
    }
    
    

}

?>

<!DOCTYPE html>
<html>

<style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

body {
	background: #f6f5f7;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
}

h2 {
	text-align: center;
    margin-right: 70px; 
    margin-left: 70px;
    padding-top: 10px;
}
.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 420px;
}

form {
	background-color: #FFFFFF;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 70px 150px;
    margin-left: 50px;
    margin-right: 50px;
	height: 100%;
	text-align: center;
}

#input {
	border-radius: 20px;
	background-color: #eee;
	border: none;
	padding: 12px 15px;
    margin-top: 8px;
    margin-bottom: 8px;

	width: 100%;
}
#input:focus {
	outline: none;
}
#button{
	border-radius: 20px;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}
#button:active {
	transform: scale(0.95);
}
#button:focus {
	outline: none;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}
footer p {
    margin: 10px 0;
}
</style>

<body>
    <div class="container" id="container">
            <h2>Please enter the following details to retrieve your account</h2>
        <form action="" method="post">
        <?php echo $msg; ?>
                <input id="input" type="username" name="Username" placeholder="Username" required>
                <input id="input" type="email" name="email" placeholder="Email id" required>
                <br><br><br>
                <input id="button" type="submit" name="submit" value="Check" style="background: linear-gradient(to right, #1CC8FF, #2972EB)">
        </form>
    </div>
</body>

 <footer>
    <p>
        &copy; Soumit Mandal, Anindya Mitra, 2019
    </p>
</footer>
</html>