<?php echo validation_errors(); ?>
<?php echo form_open('register/create'); ?>
<table border="0">
	<title>Aplikasi Website-Login</title>
	<tr>
		<td><label for="Username">Username</label></td>
		<td><input type="input" name="Username"/></td>
	</tr>
	<tr>
		<td><label for="firstname">First Name</label></td>
		<td><input type="input" name="firstname"/></td>
	</tr>
	<tr>
		<td><label for="lastname">Last Name</label></td>
		<td><input type="input" name="lastname"/></td>
	</tr>
	<tr>
		<td span=3>
			<input type="submit" name="submit" value="register"/>
		</td>
	</tr>
</table>
</form>
