<form>
	<label for=subject>Subject:</label><br>
	<input type=text id=subject name=subject><br>
	<label for=email>Email:</label><br>
	<input type=text id=email name=email><br>
	<label for=name>Name:</label><br>
	<input type=text id=name name=name><br>
	<label for=message name=message>Message:</label><br>
	<textarea id=message name=Message rows=4 cols=50>
	</textarea><br>
	<input type=submit value=Submit>
	<?php
		$dataFile = fopen("data.txt", a) or die("Unable to open file!");
		$txt = "$_POST["name"] from $_POST["email"] sent you this message:\n $_POST["subject"]\n $_POST["message"]";
		fwrite($dataFile, $txt);
		fclose($dataFile);
	?>
</form>
