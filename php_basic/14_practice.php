<!DOCTYPE html>
<html>
<body>

	<?php 
		$x = "Hello world!";
		echo "<h2>Use of strlen()</h2>";
		echo "<p>Which can return the length of a string</p>";
		echo strlen("$x");
		echo "<hr>";

		echo "<h2>Use of str_word_count()</h2>";
		echo "<p>Which can count and return the word number</p>";
		echo str_word_count("$x");
		echo "<hr>";

		echo "<h2>Use of strrev()</h2>";
		echo "<p>Which can reverse a string</p>";
		echo strrev("$x");
		echo "<hr>";

		echo "<h2>Use of strpos()</h2>";
		echo "<p>Which can search a text within a string</p>";
		echo strpos("$x", "world");
		echo "<hr>";

		echo "<h2>Use of str_replace()</h2>";
		echo "<p>Which can replace text within a string</p>";
		echo str_replace("world", "Dolly", $x);
	 ?>

</body>
</html>