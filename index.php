

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Kontaktní formulář</title>
    </head>
    <body>
        
        <h1>Kontaktní formulář</h1>
        
                <?php 
            if ($hlaska)
                echo('<p>' . $hlaska . '</p>');
        ?>  
        
        <form method="POST">
            <label for="jmeno">Vaše jméno:</label>
            <p><input id="jmeno" name="jmeno" type="text" /></p>
            
            <label for="email">E-mail:</label>
            <p><input id="email" name="email" type="email"/></p>
            
            <label for="message">Zpráva:</label>
            <p><textarea id="message" name="message" rows="5"></textarea></p>
            
            <label for="antispam">Zadejte aktuální rok:</label>
            <p><input id="antispam" name="antispam" type="date"/></p>
            
            <input type="submit" value="Odeslat" />
        </form>
    </body>
</html>
