<form class="pure-form pure-form-aligned" action="<?php echo URL; ?>Login/login" method="post">
	<fieldset>
		<div class="pure-control-group">
			<label for="name">Username</label>
			<input placeholder="Username" type="text" name="username" autofocus>
		</div>
		<div class="pure-control-group">
			<label class="password">Password</label>
			<input placeholder="Password" type="Password" name="password">
		</div>
		<div class="pure-controls">
			<button class="pure-button pure-button-primary" type="submit" name="login" value="login">Login</button>
		</div>
	</fieldset>
</form>