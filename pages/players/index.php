<?php
require_once '../../includes/functions/db.inc.php';
 require_once '../../includes/functions/base_functions.php';

 $players = getAllPlayers($conn);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Manage Players</title>
    <!-- Making it responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap --> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Own styling -->
    <link rel="stylesheet" type="text/css" media="screen" href="../../styling/master.css" />
</head>
<body>

    <?php require_once '../../includes/templates/nav.php' ?>
    <div class="container">    
        <h2>This is where all players should be displayed</h2>
        <table class="table">
            <thead>
                <th>Name</th>
                <th>Team</th>
                <th>Win/loses Percentages</th>
                <th>Last Updated</th>
            </thead>
            <tbody>
                <?php foreach($players as $p){?>
                    <tr>
                        <td><?= $p['name'] ?></td>
                        <td><?= $p['team'] ?></td>
                        <td><?= ($p['wins'] / ($p['wins']+$p['losses'])) * 100  . "% / " . ($p['losses'] / ($p['wins']+$p['losses'])) * 100 . "%"?></td>
                        <td><?= $p['updated_at']?></td>
                    </tr>
                <?php } ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>