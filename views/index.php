

<link rel="stylesheet" href="../css/login.css"> 

<div id="container">
<canvas id=c></canvas>
<div class="login-page">
	<div class="form">
		<form action="../app/incl/signup.inc.php" method="POST" class="register-form">
			<input type="text" name="email" placeholder="Email" />
			<input type="text" name="uid" placeholder="Username"/>
			<input type="password" name="pwd" placeholder="password"/>
			<input type="text"  name="invite" placeholder="Invite Code"/>
            <button>Create</button>
            <p class="message"> Already Registered? <a href="#"> Sign In</a></p>
        </form>
        <form action="../app/incl/login.inc.php" method="POST" class="login-form">
            <input type="text" name="uid" placeholder="Username"/>
            <input type="password" name="pwd" placeholder="Password"/>
            <button name="submit">Login</button>
            <p class="message"> Not Registered>? <a href="#"> Create an account</a></p>
        </form>
    </div>
</div>
</div>



