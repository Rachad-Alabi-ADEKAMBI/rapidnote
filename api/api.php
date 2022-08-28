<?php
 //include '../function-message.php' ;
//developpment
/*
function getConnexion(){
    return new PDO("mysql:host=localhost; dbname=fineblock; charset=UTF8", "root", "");
}
*/

/*
$datas = json_decode(file_get_contents("https://fineblock.eu/api/totalTfbk/"));

                                           foreach ($datas as $data) : ?>
                                           <?php
                                               $total_tfbk = $data->marketcap;
                                               $total_tfbk_rounded =  number_format($total_tfbk,
                                               2, ',', ''); ?></a>
                                           <?php endforeach;
                                        */

                                        $error = array('error' => false);
                                        $action = '';

                                        if(isset($_GET['action'])){
                                                $action = $_GET['action'];
                                        }


function verifyInput($inputContent){
    $inputContent = htmlspecialchars(
        $inputContent
    );

    $inputContent = trim($inputContent);

    return $inputContent;
}

//local
function getConnexion(){
    return new PDO("mysql:host=localhost; dbname=rapidnote; charset=UTF8", "root", "");
}






define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https" : "http").
"://".$_SERVER['HTTP_HOST'].$_SERVER["PHP_SELF"]));

function getTfbk(){
    $pdo = getConnexion();
    $req = "SELECT * FROM tfbk_history_admin ORDER BY id DESC LIMIT 1";
    $stmt = $pdo->prepare($req);
    $stmt->execute();
    $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    sendJSON($datas);
}

function login(){
    $pdo = getConnexion();
    if(!empty($_POST)){

        $errors = array ();

        if(isset($_POST['email'], $_POST['pass'])
            &&!empty($_POST['email'] && !empty($_POST['pass']))
            ){
                if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                    $errors['email'] = 'Veuillez entrer un email correct';
                }
            $sql = "SELECT * FROM `users` WHERE `email` = ?";

            $query = $pdo -> prepare($sql);

            $query->execute([verifyInput($_POST['email'])]);

            $user = $query->fetch();

            if(!$user){
                $req = "SELECT * FROM `users` WHERE `username` = ?";

                $queryy = $pdo -> prepare($req);

                $queryy->execute([verifyInput($_POST['email'])]);

                $user_username = $queryy->fetch();

                if(!$user_username){
                     $errors['email'] = 'Utilisateur/mot de passe incorrect';

                }

                else{
                    if(!password_verify($_POST['pass'], $user_username['pass'])){
                        $errors['email'] = 'Utilisateur/mot de passe incorrect';

                    }

                    else{
                        $infos = "SELECT * FROM `users` WHERE `username` = ?";

                        $infos_query = $pdo -> prepare($infos);

                        $infos_query->execute([verifyInput($_POST['email'])]);

                        $user = $infos_query->fetch();

                        session_start();

                        $_SESSION['user'] = [
                            "id" =>$user['id'],
                            "username" => $user['username'],
                            "email" => $user['email'],
                            "role" => $user['role'],
                            "token" => $user['token']
                        ];

                        header("Location: tableau-de-bord.php");
                    }
                }


            }

            else{
                if(!password_verify($_POST['pass'], $user['pass'])){
                    $errors['email'] = 'Utilisateur/mot de passe incorrect';

                }

                if(empty($errors)){

                    session_start();

                    $_SESSION['user'] = [
                        "id" =>$user['id'],
                        "username" => $user['username'],
                        "email" => $user['email'],
                        "role" => $user['role'],
                        "token" => $user['token']
                    ];

                    header("tableau-de-bord.php");
                } else{
                    ?>
                        <script>
                            alert('Identifiant ou mot de passe invalide, merci de reesayer');
                        </script>
                    <?php
                }
            }
        }
    }

}

function contact(){
    $pdo = getConnexion();
      if (!empty ($_POST)){

                $errors = array ();

                if (empty ($_POST['first_name'])) {
                    $errors['first_name'] = 'Prenom non valide';
                }

                if (empty ($_POST['last_name'])) {
                    $errors['last_name'] = 'Nom non valide';
                }

                if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                    $errors['email'] ='Email non valide';
                }

                if (empty ($_POST['subject'])) {
                    $errors['subject'] = "Veuillez sélectionner l'objet du message";
                }

                if (empty ($_POST['message'])) {
                    $errors['message'] = 'Veuillez entrer un message';
                }



                if(empty($errors)){

                        $email = verifyInput($_POST['email']);
                        $first_name = verifyInput($_POST['first_name']);
                        $last_name =  ($_POST['last_name']);
                        $subject = ($_POST['subject']);

                       if($subject = 'Support technique'){
                             $receiver = 'adekambirachad@gmail.com';
                            $message='Email expediteur: '.$email.' <br>';
                            $message.='Nom expediteur: '.$first_name.' '.$last_name.' <br>';
                            $message.= verifyInput($_POST['message']);

                      //  sendmail($subject, $message, $receiver);
                       } else {
                         $receiver = 'xnetwork32@gmail.com';
                            $message='Email expediteur: '.$email.' <br>';
                            $message.='Nom expediteur: '.$first_name.' '.$last_name.' <br>';
                            $message.= verifyInput($_POST['message']);

                    //    sendmail($subject, $message, $receiver);
                }
            }

                        ?>
<script>
alert("Votre message a été envoyé, nous vous répondrons dans les plus brefs délais");
//window.location.replace("../index.php");
</script>
<?php
    }
}


function getBtobByEmail($email){
    $pdo = getConnexion();
     $stmt = $pdo->prepare("SELECT *
        FROM users
        INNER JOIN btob
        ON btob.user_id = users.id
        WHERE users.email  LIKE ?");
    $stmt->execute(array("%$email%"));
    $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    sendJSON($datas);
}


function getUsers(){
    $pdo = getConnexion();
     $stmt = $pdo->prepare("SELECT * FROM
      users WHERE account_status = 'actif' ORDER BY
     id ASC");
    $stmt->execute();
    $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    sendJSON($datas);
}

function getFormationById($id){
    $pdo = getConnexion();
    $req = "SELECT f.id, f.libelle, f.description, f.image,
    c.libelle as 'categorie' FROM formation f inner join categorie c on  f.categorie_id = c.id
     WHERE  c.id = :id";
     $stmt  = $pdo->prepare($req);
     $stmt ->bindvalue(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
    $formation = $stmt->fetch(PDO::FETCH_ASSOC);
    $formation['image'] = URL."images/cours/".$formation['image'];
    $stmt->closeCursor();
    sendJSON($formation);
}

function sendJSON($infos){
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    echo json_encode($infos,JSON_UNESCAPED_UNICODE);
}


/* actions*/
if($action == 'login'){
    login();
}
