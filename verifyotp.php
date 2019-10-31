<?php
    $msg="";
    if(isset($_POST['submit']))
    {
        if($_POST['verotp']==$_COOKIE['otp'])
        {
            header("location:confirm.html");
        }
        else
        {
            $msg="OTP not matched";
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
                <input id="input" type="number" name="verotp" placeholder="Enter 5-digit OTP" required>
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