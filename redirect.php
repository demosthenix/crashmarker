

<html>
    <title>Log In to Crash Marker</title>
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
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
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
button{
	border-radius: 20px;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

#button:active {
	transform: scale(0.95);
}
button:focus {
	outline: none;
}

#button:focus {
	outline: none;
}
button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}
#forgot:hover {
    color: #1CC8FF;
}
#forgot:active {
    font-size: 12px;
    color: #FF1CAD;
    transition: .2s;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

#input {
	border-radius: 20px;
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}
#input:focus {
	outline: none;
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
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.log-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .log-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
    background: #FF1CAD;
    background: linear-gradient(to right, #1CC8FF, #FF1CAD);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
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
<h2>Welcome to Crash Marker, Please log in to continue</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form name="signup_form" method="post" action="signup.php">
			<h1>Create Account</h1>
            <input id="input" type="text" name="name" placeholder="Name" required>
            <input id="input" type="username" name="Username" placeholder="Username" required>
            <input id="input" type="email" name="email" placeholder="Email" required>
            <input id="input" type="number" name="contact" placeholder="Contact Number" required>
            <input id="input" type="date" name="dob" placeholder="DOB" required>
            <input id="input" type="password" name="pass" placeholder="Password" required>
			<input id="button" type="submit" name="submit" value="Sign Up" button style="background: linear-gradient(to right, #7D4BE9, #FF1CAD)">
		</form>
	</div>
	<div class="form-container log-in-container">
		<form name="login_form" method="post"  action="signin.php">
			<h1>Log in</h1>
            <span>to continue</span> 
            <br><br>
            <span style="color: red;">Invalid username or password</span>
            <br>
			<input id="input" type="username" name="Username" placeholder="Username" required>
			<input id="input" type="password" name="pass" placeholder="Password" required>
            <br><br>
            <a id="forgot" href="forgot.php">Forgot password?</a>
            <br>
            <input id="button" type="submit" name="submit" value="Log In" style="background: linear-gradient(to right, #1CC8FF, #2972EB)">
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="logIn">Log In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<footer>
		<p>
			&copy; Soumit Mandal, Anindya Mitra, 2019
		</p>
</footer>

<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('logIn');   
    const container = document.getElementById('container');
        
    signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
    });
        
        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });



</script>
</body>
</html>
