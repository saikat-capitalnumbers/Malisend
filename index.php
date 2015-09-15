<html>
	<table>
		<form name="f1" method="POST" action="mailsend.php">
			<tr>
				<td>Name:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="useremail"></td>
			</tr>
			<tr>
				<td>Message:</td>
				<td><textarea name="msg" rows="5" col="10"></textarea></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="send" value="Send">
			</tr>
		</form>
	</table>
</html>