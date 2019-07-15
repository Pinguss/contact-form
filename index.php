       <?php   

mb_internal_encoding("UTF-8");

    $hlaska = '';
    if ($_POST)
    {
        if (isset($_POST['jmeno']) && $_POST['jmeno'] &&
			isset($_POST['email']) && $_POST['email'] &&
			isset($_POST['message']) && $_POST['message'] &&
			isset($_POST['antispam']) && $_POST['antispam'] == date('Y'))
        {
            $hlavicka = 'From:' . $_POST['email'];
            $hlavicka .= "\nMIME-Version: 1.0\n";
            $hlavicka .= "Content-Type: text/html; charset=\"utf-8\"\n";
            $adresa = 'vas@email.cz';
            $predmet = 'Nová zpráva z mailformu';
            $uspech = mb_send_mail($adresa, $predmet, $_POST['message'], $hlavicka);
            if ($uspech)
            {
                $hlaska = 'Email byl úspěšně odeslán, brzy vám odpovíme.';
            }
            else
                $hlaska = 'Email se nepodařilo odeslat. Zkontrolujte adresu.';
        }
        else 
            $hlaska = 'Formulář není správně vyplněný!';
    }
    ?>

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
        <?php
        // put your code here
        ?>
    </body>
</html>
