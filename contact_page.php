<?php 
// imposto le variabili
$name = $_GET["name"];
$last_name = $_GET["last-name"];
$email = $_GET["email"];
$password = $_GET["password"];

// calcolo lunghezza delle variabili
$name_length = strlen($name);
$last_name_length = strlen($last_name);
$email_length = strlen($email);
$password_length = strlen($password);

// sostituisco la parola da censurare 
$parola_censurata = str_replace($password,'***',$password);


// stampo in pagina il risultato
echo "<p>Il nome è: $name (Lunghezza: $name_length)</p>";
echo "<p> Il cognome è: $last_name (Lunghezza: $last_name_length)</p>";
echo "<p> l'indirizzo email è:$email (Lunghezza: $email_length)</p>";
echo "<p>la password è: $password (Lunghezza: $password_length)</p>";

// stampo in pagina il risultato censurato
echo "<h2>Censura applicata</h2>";
echo "<p>Il nome è: $name (Lunghezza: $name_length)</p>";
echo "<p> Il cognome è: $last_name (Lunghezza: $last_name_length)</p>";
echo "<p> l'indirizzo email è:$email (Lunghezza: $email_length)</p>";
echo "<p>la password è: $parola_censurata (Lunghezza: $password_length)</p>";
?>