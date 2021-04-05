<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>
        <form class="" action="/welcome" method="post">
            @csrf
            <p>First name: </p>
            <input type="text" name="firstName" value="" required>
            <br>
            <p>Last name: </p>
            <input type="text" name="lastName" value="" required>
            <br>
            <p>Gender: </p>
            <input type="radio" name="gender" value="Male">
            Male <br>
            <input type="radio" name="gender" value="Female">
            Female <br>
            <input type="radio" name="gender" value="Other">
            Other <br>
            <p>Nationality: </p>
            <select class="" name="nationality">
                <option value="Indonesian">Indonesian</option>
                <option value="US">United States</option>
                <option value="UK">United Kingdom</option>
                <option value="China">China</option>
            </select>
            <p>Language Spoken: </p>
            <input type="checkbox" name="language" value="Bindonesia">
            Bahasa Indonesia <br>
            <input type="checkbox" name="language" value="English">
            English <br>
            <input type="checkbox" name="language" value="other">
            Other <br>
            <p>Bio:</p>
            <textarea name="bio" rows="8" cols="30"></textarea>
            <br>
            <input type="submit" name="submit" value="Sign Up">
        </form>
    </body>
</html>
