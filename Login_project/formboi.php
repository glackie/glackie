<!DOCTYPE html>
<html>
    <head>
        <title>Formyboi</title>
    </head>
    <body>
        <form method="post" 
         action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Name: <input type="text" name="name"><br><br>
            E-mail: <input type="text" name="email"><br><br>
            Website: <input type="text" name="website"><br><br>
            Comment: <textarea name="comment" rows="5" cols="40"></textarea>
            <br><br><input type="radio" name="gender" value="female">Female<br><br>
            <input type="radio" name="gender" value="male">Male<br><br>
            <input type="radio" name="gender" value="other">Other<br><br>
        </form>
    </body>
</html>