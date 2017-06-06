
<!doctype html>
<html>
<head>
<style>
.totoconflit {
color :red;
}
</style>
<style>
.toto {
 color:red;
}
</style>
</head>
<body>
	<form method="post" action="receive_contact.php">
		<p>
			<label for="email">
				Email
				<input type="email" id="email" name="email" value="">
			</label>
		</p>
		<p>
			<label for="message">
				Message
				<textarea id="message" name="message" row="5" cols="3"></textarea>
			</label>
		</p>
		<p>
			<button type="submit">
				Envoyer !
			</button>
		</p>
	</form>
</body>
</html>
