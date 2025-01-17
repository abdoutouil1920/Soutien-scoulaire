<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
      <link rel="stylesheet" href="login.css">
       
    </head>
<body>    
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>login etudient</h1>
			
		
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
            <a href="#">Forgot your password?</a>

			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>login enseignant</h1>
			
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In Teacher </button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign In Student</button>
			</div>
		</div>
	</div>
</div>
<script src="login.js"></script>


</body>
