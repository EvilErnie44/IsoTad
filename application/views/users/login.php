<main id="loginBlock" class="login">
<?php echo validation_errors(); ?>
	<div class="whiteBox">
		<div class="login">
			<h1 class="title"><img src="../assets/images/logo_w_bg.jpg" class="logintitle" /></h1>
			<div class="signIn">
				<h2>Sign in</h2>
				<?php echo form_open('users/login'); ?>
					<input type="email" name="email" required placeholder="Email:" value="<?=set_value('email'); ?>">
					<input type="password" name="password" required placeholder="Password:" value="<?=set_value('password'); ?>">
					<input type="submit" name="submit" placeholder="Sign In" class="submitBtn">
				</form>
			</div>
		</div>
		<div class="register">
			<div class="signIn">
				<h2>Register</h2>
				<form>
					<input type="text" name="name" required placeholder="Name:">
					<input type="email" name="email" required placeholder="Email:">
					<input type="password" name="password" required placeholder="Password:">
					<input type="submit" name="submit" placeholder="Sign In" class="submitBtn">
				</form>
			</div>
		</div>
	</div>
	<div class="redBox">
		<div class="login">
			<h2>Don't have an account?</h2>
			<p>Click to register</p>
			<button>Register</button>
		</div>
		<div class="register">
			<h1 class="title"><img src="../assets/images/logo_r_bg.jpg" class="logintitle" /></h1>
			<h2>Already have an account?</h2>
			<p>Click to login</p>
			<button>Login</button>
		</div>
	</div>