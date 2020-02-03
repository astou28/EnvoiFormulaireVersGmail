<?php  
    session_start();
    // Importez les classes PHPMailer dans l'espace de noms global 
    // Celles-ci doivent être en haut de votre script, pas à l'intérieur d'une fonction 
    use  PHPMailer \ PHPMailer \ PHPMailer ; 
    use  PHPMailer \ PHPMailer \ SMTP ; 
    use PHPMailer \ PHPMailer \ Exception ;
    
    // Le chargeur automatique de Load Composer 
    require "vendor/autoload.php";
    if(isset($_POST)){
        if ($_POST["email"] && $_POST["nom"] && $_POST["prenom"] && $_POST["message"]
         && !empty('nom') && !empty('prenom') && !empty('email') && !empty('message')){
    // L' instanciation et la transmission de «true» active les exceptions 
   $email  =  new  PHPMailer ( true );
    
    try { 
    // Paramètres du serveur
     $email -> SMTPDebug = 0;                  
    // Activer la sortie de débogage détaillé
     $email -> isSMTP ();                            
    // Envoyer en utilisant SMTP 
    $email -> Host = "ssl://smtp.gmail.com";                
    // Définit le serveur SMTP pour envoyer via
    $email -> SMTPAuth = true ;                             
    // Activer l'authentification SMTP    
    $email -> Username    =  'entrez votre adresse email' ;                    
     // Nom d'utilisateur SMTP 
    $email -> Password = 'entrez votre mot de passe' ;                               
    // Mot de passe SMTP 
    $email -> SMTPSecure = 'tls'; 
    $email->CharSet  ="utf-8";    
    // Activer le cryptage TLS; `PHPMailer :: ENCRYPTION_SMTPS` a également accepté 
    $email -> Port = 465;             
    // Port TCP auquel se connecter        
    // Destinataires 
    $email -> setFrom ( ' entrez votre adresse email ' , 'nom' );
    $email -> addAddress ( 'entrez votre adresse email');   
    // Ajouter un destinataire $ mail -> addAddress ( ' ellen@example.com ' );           
    // Le nom est facultatif $ mail -> addRhnessTo ( ' info@example.com ' , ' Information '        
    
    // Contenu 
    $email -> isHTML ( true );     
    // Définissez le format de l'e-mail sur HTML
    $email -> Subject = 'sujet ' ; 
    $email->Body    = '

    <h3 align="center">info du message</h3>
    <table border="1" width="100%" cellpadding="5" cellspacing="5">
        <tr>
            <td width="30%">nom</td>
            <td width="70%">'.$_POST["nom"].'</td>
        </tr>
        <tr>
            <td width="30%">prenom</td>
            <td width="70%">'.$_POST["prenom"].'</td>
        </tr>
        <tr>
        <td width="30%">email</td>
        <td width="70%">'.$_POST["email"].'</td>
    </tr>
        <tr>
            <td width="30%">message</td>
            <td width="70%">'.$_POST["message"].'</td>
        </tr>
        
    </table>
';

        if ($email->send()){
            $alert=array(
                "message" => "message envoyer!",
                "type"    => "success"
            );

        } else {

            $alert=array(
                "message" => "pas envoyer!",
                "type"    => "warning"
            );

        }


    } catch (Exception $e){
        $alert=array(
            "message" => $e->getMessage(),
            "type"    => "danger"
        );
    }

}else{

    $alert=array(
        "message" => "erreur lors de l'envoi !",
        "type"    => "warning"
    );

}


$_SESSION["alert"] = $alert;

header("location:index.php");
}

    