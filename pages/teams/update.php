<?php
 require_once '../../includes/functions/db.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home page</title>
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
        <h2>Update Team</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Team Name: </label>
                <input class="form-control" type="text" name="name" placeholder="Team Name">
            </div>
            
            
            <h4>Current Roster</h4>
            <div class="row">
                <div class="col-md-4">
                    <label for="name">Top Lane: </label>
                    <select class="form-control" name="top" id="">
                        <option value="player1">Top Lane</option>
                    </select>
                </div>
                
                <div class="col-md-4">
                    <label for="name">Jungle: </label>
                    <select class="form-control" name="jungle" id="">
                        <option value="player1">Jungle Lane</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="name">Mid Lane: </label>
                    <select class="form-control" name="mid" id="">
                        <option value="player1">Mid Lane</option>
                    </select>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4 offset-md-2">
                    <label for="name">ADC : </label>
                    <select class="form-control" name="adc" id="">
                        <option value="player1">Adc</option>
                    </select>
                </div>
                
                <div class="col-md-4">
                    <label for="name">Support : </label>
                    <select class="form-control" name="support" id="">
                        <option value="player1">Support</option>
                    </select>
                </div>
            </div>
            
            <div class="row">
                <button class="btn btn-block btn-primary col-md-4 offset-md-4">Submit</button>
            </div>
        </form>
    </div> 
</body>
</html>