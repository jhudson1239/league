<?php
 require_once '../../includes/functions/db.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Manage Teams</title>
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
        <h2>This is where all teams should be displayed</h2>
        <table class="table">
            <thead>
                <th>Team</th>
                <th>Last Match W/L</th>
                <th>System Prediction W/L</th>
                <th>Other Data</th>
            </thead>
            <tbody>
                <td>Dummy Data</td>
                <td>Dummy Data</td>
                <td>Dummy Data</td>
                <td>Dummy Data</td>
            </tbody>
        </table>
    </div>
</body>
</html>