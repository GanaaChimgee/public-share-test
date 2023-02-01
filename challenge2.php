<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8">
    <title>Challenges</title>
    <link rel="stylesheet" href="css/pure.min.css">
    <link rel="stylesheet" href="css/layout.css">
    <style>

		tr:nth-child(2), tr:nth-child(3), tr:nth-child(4){
			background-color: yellow;
		}
		tr:last-child{
			background-color: red;
		}
	  </style>
  </head>
  <body>
    <div class="wrapper">
      <header class="site-header">
        <h1>Code Challenge Nr 2</h1>
        <?php include "nav.php"; ?>
      </header>
      <main>
        <h2>Aufgaben 3 - 5 (Datenbank und CSS)</h2>
        <p>Importiere die Datei "import.sql" (create database ist enthalten - DB name: challenge2022)...</p>
        <p>
          Aufgaben (betroffene Tabelle: "bundesliga"):<br>
          Aufgabe 3: Erzeuge wahlweise eine PDO oder mysqli Connection zur Datenbank "challenge2022" (1 Punkt).<br>
          Aufgabe 4: Gib die Tabelle "bundesliga" in einer HTML-Tabelle aus und zwar sortiert nach "punkte" absteigend (2 Punkte).<br>
          Aufgabe 5: Setze via CSS den Hintergrund der 3 ersten Zeilen auf gelb, und der letzten Zeile auf rot (2 Punkte).
        </p>

        <?php

          // Lösung hier:

          $pdo = new \PDO("mysql:host=localhost;dbname=challenge2022;charset=utf8mb4", "root", "");


          $query = $pdo->prepare("SELECT * FROM bundesliga ORDER BY punkte DESC");
          $query->execute();
          echo"<table style='width=80%'>";
          echo"<tr>";
          echo"<th>Verein</th>";
          echo"<th>Punkte</th>";
          echo"</tr>";
          foreach($query->fetchAll(PDO::FETCH_OBJ) as $verein):
            echo"<tr>";
            echo"<td>$verein->verein</td>";
            echo"<td>$verein->punkte</td>";
            echo"</tr>";
            
          endforeach;
          echo"</table>";

        ?>
      </main>
    </div>
  </body>
</html>
