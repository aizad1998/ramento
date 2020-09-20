<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    </head>
    <body>
        <h3>Ramento LOGIN: </h3>
        <form action="">
            <label for="fname">First name:</label>
            <input type="text" id="userbox" name="username"><br><br>
            <label for="lname">Last name:</label>
            <input type="text" id="passwordbox" name="password"><br><br>
            <input type="submit" value="Submit">
        </form>
        <a href="http://127.0.0.1:8000">Go back</a>
    </body>
</html>
