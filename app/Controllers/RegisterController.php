<?php

function isNotEmpty ($value){
    //Création d'un tableau vide
    global $arrayError;

    //si le post avec la valeur est vide alors
    if(empty($_POST[$value])){
        //On rapelle le tableau et on lui donne en clé le nom de la $value et en valeur une string
        $arrayError[$value] = "Le champs $value ne peut pas être vide.";
        //On retour le tableau
        return $arrayError;
    }

    //sinon on retourne false
    return false;
}

function checkFormat($nameInput,$value){
    //Création d'un tableau vide
    global $arrayError;

     //Vos regex = vos filtres
    $regexPseudo = '/^([0-9a-z_\-.A-Zà-üÀ-Ü]){3,255}$/';
    $regexPassword = '/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/';

    //on prend le nom de l'input
    switch($nameInput){

        //Si l'input s'appel pseudo alors 
        case 'pseudo':

            //si la valeur de l'input n'arrive pas a passer le filtre alors
            if(!preg_match($regexPseudo, $value)){
                //on appel notre tableau et on ajoute en clé pseudo et en valeur la string
                $arrayError['pseudo'] = 'Merci de renseigner un pseudo correcte!';
            }
            break;
        case 'password':
            if(!preg_match($regexPassword,$value)){
                $arrayError['password'] = 'Veuillez renseigner un mot de passe valide ( 8 caractères minimum, 1 Majuscule, 1 Chiffre , 1 caractère spécial  et 1 lettre minuscule )';
            }
            break;
        case 'email':
            // Vérifie si l'email est valide
            if(!filter_var($value, FILTER_VALIDATE_EMAIL)){
                $arrayError['email'] = 'Veuillez entrer un email valide ';
            }
            break;
    }
}



if(isset($_POST['pseudo'])){
    $valueEmail = htmlspecialchars($_POST['email']);
    $valuePassword = htmlspecialchars($_POST['password']);
    $valuePseudo = htmlspecialchars($_POST['pseudo']);

    checkFormat('pseudo',$valuePseudo);
    checkFormat('password',$valuePassword);
    checkFormat('email',$valueEmail);

    isNotEmpty('pseudo');
    isNotEmpty('email');
    isNotEmpty('password');

    // nos erreurs seront affichés dans :
    var_dump($arrayError);



    require_once( __DIR__ . "/../Views/register.view.php" );
}else{
    
    require_once( __DIR__ . "/../Views/register.view.php" );
}
    
 