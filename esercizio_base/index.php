<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>Form di contatto</h1>

    <!-- FORM DI CONTATTO -->
     <form action="contact_page.php" method="get">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name">
        <hr>
        <label for="last-name">Cognome:</label>
        <input type="text" id="last-name" name="last-name">
        <hr>
        <label for="email">Inserisci la tua email:</label>
        <input type="email" name="email" id="email">
        <hr>
        <label for="password">Inserisci la tua passwrod</label>
        <input type="password" name="password" id="password">
        <button type="submit">Invia</button>
     </form>
     <!-- /FORM DI CONTATTO -->
</body>
</html>