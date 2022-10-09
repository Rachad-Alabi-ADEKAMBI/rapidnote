<?php
include 'api.php';
//www.fineblock.eu/api/demande/totalTfbk
//www.fineblock.eu/api/demande/userInfos/:id(6,7)

//www.monsite.fr/api/formations/:categorie (PHP. JS)
//www.monsite.fr/formation/:id (6, 7)

try{
    if(!empty($_GET['demande'])){
        $url = explode ("/", filter_var($_GET['demande'], FILTER_SANITIZE_URL));
        switch($url[0]){
            case "users":
                    getUsers();
            break;


            case "rates":
                getRates();
        break;

        case "transactions":
            getTransactions();
    break;

    case "payments":
        getPayments();
break;

        case "totalTransactionsValue":
            getTotalTransactionsValue();
    break;

                case "myBalance":
                    if (!empty($url[1])){
                        getMyBalance($url[1]);
                    } else{
                        throw new Exception ("Please check the id");
                    }
                    break;


                    case "rateById":
                        if (!empty($url[1])){
                            getRateById($url[1]);
                        } else{
                            throw new Exception ("Please check the id");
                        }
                        break;

                   /*     case "userById":
                            if (!empty($url[1])){
                                getUserById($url[1]);
                            } else{
                                throw new Exception ("Please check the id");
                            }
                            */



                    case "myTransactions":
                        if (!empty($url[1])){
                            getMyTransactions($url[1]);
                        } else{
                            throw new Exception ("Vous n'avez pas renseigné l'id");
                        }
                    break;
            default: throw new Exception ("La demande n'est pas valide");
        }
    } else{
        throw new Exception ("Problème de récupération de données. ");
    }
} catch(Exception $e){
    $erreur = [
        "message" => $e->getMessage(),
        "code" => $e->getCode()
    ];

    print_r($erreur);
}