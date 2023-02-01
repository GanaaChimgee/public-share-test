<nav class="main-nav">
	<?php
	function currentFile(string $file) {
		if (basename($_SERVER['PHP_SELF']) === $file) {
			echo ' class="current"';
		}
		echo "";
	}
	?>
	<ul>
    <li><a href="index.php"<?php currentFile("index.php"); ?>>Start</a></li>
		<li><a href="challenge1.php"<?php currentFile("challenge1.php"); ?>>C1 - Aufgaben 1 - 2 (Basis)</a></li>
		<li><a href="challenge2.php"<?php currentFile("challenge2.php"); ?>>C2 - Aufgaben 3 - 5 (Datenbank/CSS)</a></li>
		<li><a href="challenge3.php"<?php currentFile("challenge3.php"); ?>>C3 - Aufgaben 6 - 9 (Formular/OOP/DB)</a></li>
		<li><a href="challenge4.php"<?php currentFile("challenge4.php"); ?>>C4 - Aufgaben 10 - 12 (Javascript)</a></li>
	</ul>
</nav>
