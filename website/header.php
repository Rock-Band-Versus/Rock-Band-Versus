<link rel="stylesheet" href="assets/css/navbar.css">
<?php include_once('assets/credentials-GITIGNORE/credentials.php'); ?>
<header>
    <?php
        $idGroupe1 = $_GET['groupe1'];
        $idGroupe2 = $_GET['groupe2'];
        $query1 = "SELECT Nom_Groupe FROM groupe WHERE ID_Groupe=".$idGroupe1."";
        $query2 = "SELECT Nom_Groupe FROM groupe WHERE ID_Groupe=".$idGroupe2."";
        $stmt1 = $pdo->prepare($query1);
        $stmt2 = $pdo->prepare($query2);
        $stmt1->execute();
        $stmt2->execute();
        $nomGroupe1 = $stmt1 -> fetch(PDO::FETCH_ASSOC);
        $nomGroupe2 = $stmt2 -> fetch(PDO::FETCH_ASSOC);
    ?>
    <div>
        <img id="logobeatles" src=<?php if($idGroupe1 < 13){
            echo "assets/img/" . strval($idGroupe1). "-groupe.png";
            }
        else{
            echo "assets/img/" . strval($idGroupe1). "-groupe.gif";
            }?> class="select">
        <div><?php echo $nomGroupe1['Nom_Groupe'] ?></div>
    </div>

    <img id="logovs" src="assets/img/vslogo.png" alt="logovs">

    <div>
        <img id="logors" src=<?php 
        if($idGroupe2 < 13){
            echo "assets/img/" . strval($idGroupe2). "-groupe.png";
            }
        else{
            echo "assets/img/" . strval($idGroupe2). "-groupe.gif";
            }?>>
        <div><?php echo $nomGroupe2['Nom_Groupe'] ?></div>
    </div>
</header>