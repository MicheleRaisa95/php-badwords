<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords-BONUS</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="form">
    
    <div class="tab-content">
        <div id="signup">   
        <h1 class="mr-titolo">registrati è gratis !</h1>
        
        <form action="/" method="post">
        
        <div class="top-row">
            <div class="field-wrap">
            <label>
                Nome<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" class="p-2" />
            </div>
        
            <div class="field-wrap">
            <label>
                Cognome<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off"  class="p-2"/>
            </div>
        </div>

        <div class="field-wrap">
            <label>
            Email<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"  class="p-2"/>
        </div>
        
        <div class="field-wrap">
            <label>
             Inserisci password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"  class="p-2"/>
        </div>
        
        <button type="submit" class="button button-block">Registrati </button>
</form>
</body>
</html>