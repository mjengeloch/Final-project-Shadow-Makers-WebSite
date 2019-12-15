<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Prise de contact</h2>
<p>Réception d'une prise de contact avec les éléments suivants :</p>
<ul>
    <li><strong>Prénom</strong> : {{ $contact['first_name'] }}</li>
    <li><strong>Nom</strong> : {{ $contact['last_name'] }}</li>
    <li><strong>Pseudo</strong> : {{ $contact['nickname'] }}</li>
    <li><strong>Pseudo Discord</strong> : {{ $contact['discord_nickname'] }}</li>
    <li><strong>Email</strong> : {{ $contact['email'] }}</li>
    <li><strong>Message</strong> : {{ $contact['message'] }}</li>
</ul>
</body>
</html>
