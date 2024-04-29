<?php
    // connexion a la bd ...
    include('dbconnection.php');
    // recuperer les donnees du formulaire ....
        $nom = $_POST['name'];
        $email = $_POST['email'];
        $numero = $_POST['phone'];
        $service = $_POST['service'];
        $date = $_POST['date'];
        $heure = $_POST['time'];
        $message = $_POST['message'];
    
    // requete a envoyer vers la bd ...    
    $requet = mysqli_query($conn ,"insert into data (nom,email,numero,service,date,heure,message)values ('$nom','$email','$numero','$service','$date','$heure','$message')");
    if($requet){
        echo"<script> alert('nous avons  recu avec succees vos informations . Merci pour votre confiance!!')</script>";
        include 'successRdv.html';
    }else{
        echo "<script> alert ('nous n'avons pas recu vos information. Essayer a nouveau!!!')</script>";
    }
    
?>



