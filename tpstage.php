<?php
    
     try{
        $pdo= new pdo('mysql:host=localhost;dbname=stageeden','root','');
    }
    catch (\throwable $th){
        echo 'erreur de connexion';
    }
                $pdostat=$pdo->prepare('SELECT  services,besoins,quantite,stock,dates FROM oceane');
                $pdostat->execute();
                $reponse= $pdostat->fetchall(PDO::FETCH_ASSOC);
                
?>          
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>
        <div class="titre1">
            <div class="titre2">
                <img src="figma_logo_icon_1731571.svg" alt="mom" class="figma">
                <img src="hand-index-thumb1.svg" alt="mom" class="maine">
                 test html stage<button class="bouton3">login</button>
                <img src="arrow-point-hand-drawn-outline-pointing-to-right-direction-svgrepo-com[1].svg" alt="mom" class="fleche">
            </div>
        </div>
        <div class="baniere">
            <p class="title">
                <img src="800px-Figma-logo.svg.png" alt="mom" width="25px" height="30px" style="position: absolute;"><strong style="margin-left: 50px;">Welcome to Figma!</strong> Create an account to edit collaborate on this file
                <button class="bouton1"><img src="index.png" alt="mom" width="20px" height="20px" style="position: absolute;"><em style="margin-left: 25px;"> Continue to google</em></button>
                <input type="submit" value="Sign up with email" class="bouton2">
            </p>
        </div>
        <div class="menu">
            <img  src="list1.svg" alt="mom" width="30" height="30">  
        </div>
        <div class="baniere1">
            <div class="Gbaniere2">
               <P > WANKO MARCELO</P>
            </div>
            <div class="Mbaniere2">
                <P>AUCUN NOUVEAU MESSAGE</P><img class="image1" src="clochesvg.svg" alt="mom" >
            </div>
            <div class="Pbaniere2">
                <P>Connecte il ya 45 minutes </P><img class="image1" src="power[1].svg" alt="mom" style="background-color: rgb(51,165,155);">
            </div>
        </div>
        <div class="baniere3" >
            <ul>
                <li><a href="#"><img class="images" src="grid-1x2-fill1.svg" alt="mom" style=" background-color: rgb(251,109,108);" > </a> </li>
                <li> <a href="#">ADMINISTRATION </a></li>
                <li> <a href="#">MAGASINS </a>
                    <ul>
                        <li><a class="lien" href="#"> consommation </a></li>
                        <li> <a class="lien" href="#">medicaments </a></li>
                    </ul>
                </li>
                <li> <a href="#">PREINSCRIPTEURS </a></li>
                <li> <a href="#">FINANCES </a></li>
                <li> <a href="#">ACCUEIL </a></li>
                <li> <a href="#">SERVICES </a></li>
                <li> <a href="#">PATIENTS </a></li>
            </ul>
           
        </div>
        <div class="baniere4">
            <p></p>
        </div>
        <div class="photo">
            <div class="leftside">
                <a href="#" class="lien1"><p><img class="monimage" src="x-circle.svg"> Demandes</p></a>
                <a href="#" class="lien1"><p><img class="monimage" src="boxes-packing-solid.svg"> Gerer les stocks</p></a>
                <a href="#" class="lien1"><p ><img class="monimage" src="bag-plus-fill.svg"> Commandes</p></a>
                <a href="#" class="lien1"><p><img class="monimage" src="boxes-packing-solid.svg"> Bons de commandes</p></a>
            
            </div>
            <div class="rightside">
                
                    <input type="text" placeholder="Rechercher"  class="input">
                    <img src="plus.png" alt="mom" class="photos">
                <table>
                    <p class="commande">A COMMANDER</p> 
                    <tr>
                        <th class="cmd">Services</th>
                        <th>Besoins</th>
                        <th>Quantite</th>
                        <th>En stock</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach($reponse as $valeur){ ?>
                        
                        <tr class="bordure">
                            <td><?php echo $valeur['services'] ;?></td>
                            <td><?php echo $valeur['besoins'] ;?></td>
                            <td><?php echo $valeur['quantite'] ;?></td>
                            <td><?php echo $valeur['stock'] ;?></td>
                            <td><?php echo $valeur['dates'] ;?></td>
                            <td><img src="justesvg2.svg" alt="mom"  height="20" width="20"></td>
                        </tr>
                    <?php }?>
                    
                </table>
                <footer class="piedepage">
                    <p class="dernierp">
                        <img src="chevron-double-left2.svg" alt="mom" class="picture">
                        <img src="chevron-compact-left1.svg" alt="mom"  class="picture">
                        <img src="1number_1_30802.svg" alt="mom" style="background-color: rgb(0,128,128); border-radius: 7px; width: 25px; height: 25px; margin-left: 6px;">
                        <img src="number-two2.svg" alt="mom"  class="picture">
                        <img src="number-three1.svg" alt="mom"  class="picture">
                        <img src="number-four1.svg" alt="mom"  class="picture">
                        <img src="chevron-compact-right1.svg" alt="mom"  class="picture">
                        <img src="chevron-double-right2.svg" alt="mom"  class="picture">
                    </p>
                </footer>
            </div>
        </div>
        <footer class="footer1">
            <p></p>
        </footer>
   
</body>
</html>