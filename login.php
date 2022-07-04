<?php
    if(isset($_POST['send'])){
        $service=$_POST['services'];
        $besoin=$_POST['besoins'];
        $quantite=$_POST['quantite'];
        $stock=$_POST['stock'];
        $date=$_POST['dates'];

        if(!(empty($service) || empty($besoin) || empty($quantite) || empty($stock) || empty($date))){
            try{
                $pdo= new PDO('mysql:host=localhost;dbname=stageeden','root','');
            }
            catch (\throwable $th){
                echo 'erreur de connexion';
            }
                $pdostat=$pdo->prepare('INSERT INTO oceane (services,besoins,quantite,stock,dates) values(?,?,?,?,?)');
                $pdostat->bindparam(1,$service);
                $pdostat->bindparam(2,$besoin);
                $pdostat->bindparam(3,$quantite); 
                $pdostat->bindparam(4,$stock);
                $pdostat->bindparam(5,$date);
                $pdostat->execute();
                
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" >
    <title>Document</title>
</head>
<body class="bg-primary">
    
    <div class="w-50 mx-auto vh-100 d-flex align-items-center">
        <form method="post" action="" class=" row gx-2  gy-2 px-2 py-3 bg-light border rounder " id="formulaire">
            <div class="col-12 text-center">CONNEXION </div>
            <div class="col-6">
                <p>Services:<input id="nom" type="text" name="services"placeholder="Entrer le services souhaité" class="form-control"></p> <br>
            </div>
            <div class="col-6">
                <p>Besoins: <input id="nom" type="text" name="besoins"placeholder="Entrer votre besoin" class="form-control"></p> <br>
            </div>
            <div class="col-6" >
                <p>Quantite : <input type="number" name="quantite" placeholder="Entrer la quantite a commander"  class="form-control"></p><br>
            </div>
            <div class="col-6">
                <p>Stock : <input type="number" name="stock" placeholder="Entrer la quantite en stock" class="form-control"></p><br>
            </div>
            <div class="col-6">
                <p> date de commande:<input type="date" name="dates" class="form-control"></p> <br>
            </div>
            
            <input type="submit" value="Enregistrer"name="send">
            <a href="tpstage.php" class="text-dark" style=" text-decoration:none; opacity:0.5; text-align:center">voir</a>
            
        </form>
    </div>
</body>
</html>