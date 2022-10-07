<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $errors[] = "Le format du prénom est non valide";
  } else {
    $name = test_input($_POST["fname"]);
  }
  if (empty($_POST["lname"])) {
    $errors[] = "Le format du nom est non valide";
  } else {
    $lname = test_input($_POST["lname"]);
  }
  if (empty($_POST["email"])) {
    $errors[] = "Adresse email non valide";
  } else {
    $email = filter_var($_POST["email"]);
  }
  if (!empty($_POST["phone"])) {
    $errors[] = "Un message est requis";
  } else {
    $textarea = is_numeric($_POST["phone"]);
  }
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


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
        
    <?php if (!empty($errors)) { ?>
      <ul class = "msgError">
        <?php foreach ($errors as $error) { ?>
      <li> <?php echo $error; ?></li>
      <?php } ?>
     </ul>
   <?php } ?>
    
   <label for="fname" name="fname">Prénom : </label>
        <input type="text" name="fname" id="fname" placeholder="Sasuke" required>
        <label for="lname" name="lname">Nom de famille : </label>
        <input type="text" name="lname" id="lname" placeholder="Uchiwa" required>
        <label for="email" name="email">Adresse e-mail : </label>
        <input type="email" name="email" id="email" placeholder="nom@exemple.com" required>
        <label for="tel" name="phone">Numéro de telephone : </label>
        <input type="tel" name="phone" id="phone" placeholder="06 13 45 67 87" required>
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