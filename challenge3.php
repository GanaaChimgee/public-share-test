<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8">
    <title>Challenges</title>
    <link rel="stylesheet" href="css/pure.min.css">
    <link rel="stylesheet" href="css/layout.css">
  </head>
  <body>
    <div class="wrapper">
      <header class="site-header">
        <h1>Code Challenge Nr 3</h1>
        <?php include "nav.php"; ?>
      </header>
      <main>
        <h2>Aufgaben 6 - 9 (Formular, OOP und Datenbank)</h2>
        <p>Importiere die Datei "import.sql" (create database ist enthalten)...</p>
        <p>Aufgabe 6: (3 Punkte)<br>Das Formular soll mit Hilfe der bestehenden PHP Klasse Validation (liegt im Ordner "classes") validiert werden.<br>
            Das heißt: die Klasse ist fertig vorbreitet: die Methoden sollen hier einfach angewandt werden!
            <blockquote>
                Überprüfen:<br>
                Name => mindestens 2 Zeichen<br>
                E-Mail => gültige E-Mail Adresse<br>
                Passwort => mindestens 8 Zeichen<br>
            </blockquote>
        </p>
        <p>Aufgabe 7: (2 Punkte)<br>Falls die Formularfelder nicht korrekt ausgefüllt wurden, sollen die entsprechenden Fehlermeldungen ausgegeben werden</p>
        <p>Aufgabe 8: (2 Punkte)<br>Falls alle Formularfelder korrekt ausgefüllt wurden, sollen die Daten in die Datenbanktabelle "users" gespeichert werden.</p>
        <p>Aufgabe 9: (1 Punkt)<br>Zusatzpunkt, falls bei der Aufgabe 3 ein prepared Statement verwendet wird.</p>

        <?php
        
        // Lösung hier:
        require_once "classes/Validation.php";
        $errormsg = "";

        if (count($_POST) > 0) {

          if (min($_POST["name"], 2) == false) {
            $errormsg = "Name zu Kurz";
          }else{
            if (filter_var($_POST["email"]) == false) {
              $errormsg = "ungültige E-Mail";
            }else{
              if (min($_POST["pw"], 8) == false) {
                $errormsg = "Passwort zu Kurz";
              }else{
                $pdo = new \PDO("mysql:host=localhost;dbname=challenge2022;charset=utf8mb4", "root", "");

                $password=crypt($_POST["pw"], 'phpundsql');

                $stmt = $pdo->prepare("INSERT INTO users (
                    name, 
                    email, 
                    password) 
                VALUES (
                    :name, 
                    :email,
                    :password)");
                  
                    $stmt->bindValue(":name",$_POST["name"]);
                    $stmt->bindValue(":email",$_POST["email"]);
                    $stmt->bindValue(":password",$password);
                    $stmt->execute();
              }
            }
          }
         





        }

        ?> 

        

          <form action="challenge3.php" method="POST">
              <div class="row">
                  <label for="name">Name:*</label>
                  <input type="text" name="name" id="name">
              </div>
              <div class="row">
                  <label for="email">E-Mail:*</label>
                  <input type="text" name="email" id="email">
              </div>
              <div class="row">
                  <label for="pw">Passwort:*</label>
                  <input type="password" name="pw" id="pw">
              </div>
              <div class="row submit">
                  <button type="submit">speichern</button>
              </div>
          </form>

        </main>
    </div>
  </body>
</html>
