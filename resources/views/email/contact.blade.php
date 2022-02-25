<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact du site beckyada.com</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

</head>
<body>
    <table class="table table-responsive">
        <tr>
            <th>Nom expediteur</th>
            <th>Email expediteur</th>
            <th>Message expediteur</th>
        </tr>
        <tr>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->message }}</td>
        </tr>
    </table>
</body>
</html>