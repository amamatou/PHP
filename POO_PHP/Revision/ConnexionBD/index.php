<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>PDO exemple</title>
    <?php
        require_once("connexpdo.inc.php");
        $PDOobjet = new PDOclass("ginf1","param");
        $res = $PDOobjet->MakeQuerry("select * from etudiant");
        $data = $res->fetchAll();
?>
</head>
<body>
    <h1>Le nombre de requête fait est: <?= $PDOobjet->NbQuerry() ?></h1>
    <h1>Le nombre de résultat trouvé est: <?= $res->rowCount() ?> </h1>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>CNE</th>
                <th>Code apogee</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $row): ?>
                <tr>
                <?php for($i= 0; $i< $res->columnCount() ;$i++){ ?>
                    <td><?= $row[$i] ?></td>
                <?php } ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>