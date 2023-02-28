
<?php

$ime = $_POST['ime'];
$naslov = $_POST['naslov'];
$email = $_POST['email'];
$mobitel = $_POST['mobitel'];
$poruka = $_POST['poruka'];

$mailheader = "From:".$ime."<".$email.">\r\n";

$recipient = "example@gmail.com";

mail($recipient, $naslov, $poruka, $mailheader) or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">
<head>
<title>Turtle Pond - Kontakt</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./style.css" />
<link
  href="https://fonts.googleapis.com/css2?family=Heebo:wght@500;700&family=Lobster&display=swap"
  rel="stylesheet">
</head>

<body>
<h1 class="display-3 text-center text-muted my-4">Hvala Vam što ste nas kontaktirali. Javiti ćemo Vam se u najkraćem mogućem roku!</h1>
<h1 class="display-3 text-center text-muted my-4">Vratite se na <a href="index.html">početnu</a>.</h1>

</body>
</html>


';

?>