<?php
//qui la parte di inserimento nel db degli utenti

//1.connessione a MySQL + gestione degli eventuali errori
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servername = 'db';
        $username = 'myuser';
    $password = 'mypassword';
    $database = 'myapp_db';

    echo $servername . "<br />";
    echo $username   . "<br />";
    echo $password   . "<br />";
    echo $database   . "<br />";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

    echo "<h1>Connessione riuscita a MySQL!</h1>";

    $result = $conn->query("SHOW TABLES;");
    echo "<pre>";
    while ($row = $result->fetch_array()) {
        print_r($row);
    }
    echo "</pre>";

    $conn->close();

//eseguo la connessione al db
  }
//2.recuperiamo i dati inviati in POST dall'utente
//3.Costruiamo la query SQl

//INSERT INFO (nome, email) VALUES ('Mario Rossi', 'mario.rossi@example.com')
// Eseguiamo la query e controlliamo il risultato

//a valle del form visuallizzare gi utenti presenti nella tabella
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="form">
        <form method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <br>
             <label for="cognome">Cognomne:</label>
            <input type="text" id="cognome" name="cognome" required>
            <br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <input type="submit" value="Inserisci">
        </form>

    </div>

    <div id="users">
        <h2>Utenti Registrati:</h2>
        <?php
        //qui visualizziamo gli utenti presenti nel db

        
        
        ?>
    </div>

    
</body>
</html>


<?php

$servername = 'db';
$username = 'myuser';
$password = 'mypassword';
$database = 'myapp_db';

echo $servername . "<br />";
echo $username   . "<br />";
echo $password   . "<br />";
echo $database   . "<br />";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

echo "<h1>Connessione riuscita a MySQL!</h1>";

$result = $conn->query("SHOW TABLES;");
echo "<pre>";
while ($row = $result->fetch_array()) {
    print_r($row);
}
echo "</pre>";

$conn->close();

//eseguo la connessione al db

?>

