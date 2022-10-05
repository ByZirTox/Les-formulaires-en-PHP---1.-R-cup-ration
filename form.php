<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="nice.php" method="POST">
        <label for="fname" name="fname">Prénom : </label>
        <input type="text" name="fname" id="fname" placeholder="Sasuke">
        <label for="lname" name="lname">Nom de famille : </label>
        <input type="text" name="lname" id="lname" placeholder="Uchiwa">
        <label for="email" name="email">Adresse e-mail : </label>
        <input type="email" name="email" id="email" placeholder="nom@exemple.com">
        <label for="tel" name="phone">Numéro de telephone : </label>
        <input type="tel" name="phone" id="phone" placeholder="06 13 45 67 87">
        <label for="pet-select">Effectue un choix : </label>
        <select name="pets" id="pet-select">
            <option value="">Effectue un choix</option>
            <option value="php">Php</option>
            <option value="javascript">javascript</option>

        </select>



        <label for="textarea" name="textarea">Message : </label>
        <textarea name="textarea" rows="5"></textarea>
        <button class="btnSend">Envoyez</button>

    </form>



    </form>
</body>

</html>