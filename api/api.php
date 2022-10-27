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

                                        function str_random($length){
                                            $alphabet="0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";

                                            return substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
                                        }

function verifyInput($inputContent){
    $inputContent = htmlspecialchars(
        $inputContent
    );

    $inputContent = trim($inputContent);

    return $inputContent;
}

//local/*
/*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
*/
function getConnexion(){
    return new PDO("mysql:host=localhost; dbname=rapidnote; charset=UTF8", "root", "");
}


//production
/*
function getConnexion(){
    return new PDO("mysql:host=localhost; dbname=rapidnote; charset=UTF8", "adra7128", "MJAnrz__QiEu");
}
*/






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

        if(isset($_POST['email'], $_POST['pass'])
            &&!empty($_POST['email'] && !empty($_POST['pass']))
            )
            $sql = "SELECT * FROM users WHERE email = ?
            OR username = ?";

            $query = $pdo -> prepare($sql);

            $query->execute([verifyInput($_POST['email']), verifyInput($_POST['email'])]);

            $user = $query->fetch();

            if(!$user){ ?>

                            <script>
                                alert('Please check your login details')
                            window.location.replace('http://127.0.0.1:8080/login');
                            exit();
                        </script>
                     <?php

                }

                else{
                    if(!password_verify($_POST['pass'], $user['pass'])){
                       ?>
                             <script>
                                alert('Please check your login details')
                            window.location.replace('http://127.0.0.1:8080/login');
                            exit();
                        </script>
                       <?php

                    }

                    else{
                        session_start();

                        $_SESSION['user'] = [
                            "id" =>$user['id'],
                            "username" => $user['username'],
                            "email" => $user['email'],
                            "role" => $user['role'],
                            "token" => $user['token']
                        ];

                        $role= $_SESSION['user']['role'];

                    if($role=='admin'){
                        ?>
                        <script>
                            window.location.replace('http://127.0.0.1:8080/dashboardAdmin');
                        </script>
                   <?php
                    }

                    if($role=='user'){
                        ?>
                        <script>
                            window.location.replace('http://127.0.0.1:8080/dashboard');
                        </script>
                   <?php
               }
                    }


        }
    }
}

function logout(){
    if(!isset($_SESSION['user'])){
        header("Location: connexion.php");
        exit;
    }

    unset($_SESSION['user']);

    header("Location: http://127.0.0.1:8080");
}

function getMyTransactions($user_id){
    $pdo = getConnexion();
        $req = $pdo->prepare('SELECT * FROM
        transactions WHERE seller_id = ?
        OR buyer_id = ?');
        $req->execute(array($user_id, $user_id));
        $datas = $req->fetchAll();
        $req->closeCursor();
        sendJSON($datas);
}

function getRates(){
    $pdo = getConnexion();
        $req = $pdo->prepare('SELECT * FROM
        rates');
        $req->execute();
        $datas = $req->fetchAll();
        $req->closeCursor();
        sendJSON($datas);
}


function setAccount(){
    $pdo = getConnexion();
    if (!empty($_POST)) {
        $errors = [];

        //mise a jour du compte
        if ( empty($_POST['username'])) {
            $errors['username'] = 'pseudo non valide';
        } else {
            $req = $pdo->prepare(
                'SELECT id FROM users WHERE username = ?'
            );
            $req->execute([$_POST['username']]);
            $user = $req->fetch();
            if ($user) {
                $errors['username'] = 'Ce pseudo est déjà pris';
            }
        }

        if (empty($_POST['password1'])) {
            $errors['password1'] =
                'Vous devez rentrer un mot de passe';
        }

        if ($_POST['password2'] != $_POST['password1']) {
            $errors['password2'] =
                'Les mots de passe ne correspondent pas';
        }

        if (!empty($errors)) { ?>
                Veuillez corriger les erreurs suivantes: <br>
                <ul>
            <?php foreach ($errors as $error): ?>
            <li style="color: red"><?= $error; ?></li>
            <?php endforeach;?>
        </ul>
        <?php }

        if (empty($errors)) {
            $quantity_to_give = $_SESSION['offer']['quantity_to_give'];
            $amount_to_pay = $_SESSION['offer']['amount_to_pay'];
            $user_fullname = $_SESSION['register']['first_name'].' '.$_SESSION['register']['last_name'];
            $user_first_name = $_SESSION['register']['first_name'];
            $user_last_name = $_SESSION['register']['last_name'];
            $user_role = $_SESSION['register']['role'];
            $user_email = $_SESSION['register']['email'];
            $offer_type = $_SESSION['offer']['offer_type'];
            $user_id = $_SESSION['registerId']['id'];
            //mise à jour du compte adhérent

            $req = $pdo->prepare("UPDATE users SET  username=?,
            pass = ?, total_quantity = ?, account_status ='active',
            done_modality = 1, last_date_of_payment = NOW(),
            quantity_to_give = ?, amount_to_pay = ?, exchange = 'inactif'
            WHERE id = ?");

                $username = verifyInput($_POST['username']);
            $password = password_hash(
                $_POST['password1'],
                PASSWORD_BCRYPT
            );

            $req->execute([
                $username,
                $password,
                $quantity_to_give,
                $quantity_to_give,
                $amount_to_pay,
                $user_id
            ]);

         //mise à jour de la table historique tfbk admin
         $req = $pdo->prepare("SELECT * FROM tfbk_history_admin
         ORDER BY id DESC LIMIT 1");
             $req->execute();

             while ($datas = $req->fetch()) {
                 $initialQuantity = $datas['final_quantity'];
                 $old_total_Tfbk = $datas['total_Tfbk'];
             }

             $new_total_Tfbk = $old_total_Tfbk + $quantity_to_give;
             $new_marketcap = $new_total_Tfbk / 200000;

             $comment = 'Adhésion de ' . $user_fullname;

             $final_quantity = $initialQuantity - $quantity_to_give;

             $admin_history = $pdo->prepare("INSERT INTO tfbk_history_admin
         SET initial_quantity = ?, quantity = ?, receiver_id = ?,
         comment = ?, final_quantity = ?, total_Tfbk = ?, marketcap = ?");

             $admin_history->execute([
                 $initialQuantity,
                 $quantity_to_give,
                 $user_id,
                 $comment,
                 $final_quantity,
                 $new_total_Tfbk,
                 $new_marketcap,
             ]);

             //mise à jour de la table historique customers
             $customers_history = $pdo->prepare("INSERT INTO tfbk_history_customers
         SET sender_id = ?, sender_name='Fineblock', quantity = ?, receiver_id = ?, receiver_name = ?,
         comment = ?, sender_role='admin', operation_name='Transfert après adhésion'");

             $customers_history->execute([
                 32,
                 $quantity_to_give,
                 $user_id,
                 $user_fullname,
                 $comment,
             ]);

            //on determine si c'est un filleul
            if (isset($_SESSION['sponsor'])) {

                if($_SESSION['register']['role'] == 'btob'){
                    $sponsor_quantity = 10;
                }

                if($_SESSION['register']['role'] == 'btoc'){
                    $sponsor_quantity = 5;
                }

                $sponsor_id = $_SESSION['sponsor']['sponsor_id'];
                $sponsor_name = $_SESSION['sponsor']['sponsor_name'];

              //on récupère les informations du parrain
              $datas= json_decode(file_get_contents("https://backoffice.fineblock.eu/api/userById/".$sponsor_id));

              foreach ($datas as $data) : ?>
              <?php
                  $sponsor_old_quantity = $data->total_quantity ?>
              <?php endforeach;

              $sponsor_new_quantity = $sponsor_old_quantity + $sponsor_quantity;

              $sql = $pdo->prepare("UPDATE users
              SET total_quantity = ? WHERE id = ? ");

                    $sql->execute([
                        $sponsor_new_quantity,
                        $sponsor_id,
                    ]);

            //mise à jour de la table historique tfbk admin
                    $sql = $pdo->prepare("SELECT * FROM tfbk_history_admin
                    ORDER BY id DESC LIMIT 1");
                    $sql->execute();

                    while ($data = $sql->fetch()) {
                        $initialQuantity = $data['final_quantity'];
                        $old_total_Tfbk = $data['total_Tfbk'];
                    }

                    $new_total_Tfbk =
                        $old_total_Tfbk + $sponsor_quantity;
                    $new_marketcap = $new_total_Tfbk / 200000;

                    $comment =
                        'Transfert au parrain de ' . $user_fullname;

                    $final_quantity =
                        $initialQuantity - $sponsor_quantity;

                    $update_admin_history = $pdo->prepare("INSERT INTO tfbk_history_admin
                        SET initial_quantity = ?, quantity = ?, receiver_id = ?,
                        comment = ?, final_quantity = ?, total_Tfbk = ?, marketcap = ?");

                    $update_admin_history->execute([
                        $initialQuantity,
                        $sponsor_quantity,
                        $sponsor_id,
                        $comment,
                        $final_quantity,
                        $new_total_Tfbk,
                        $new_marketcap,
                    ]);

                    //mise à jour de la table historique customers
                    $customers_history = $pdo->prepare("INSERT INTO tfbk_history_customers
                        SET sender_id = ?, sender_name='Fineblock', quantity = ?, receiver_id = ?, receiver_name = ?,
                        comment = ?, sender_role='admin', operation_name='Transfert Automatique après parrainage'");

                    $customers_history->execute([
                        32,
                        $sponsor_quantity,
                        $sponsor_id,
                        $sponsor_name,
                        $comment,
                    ]);


                            //on determine si le compte existait
                            if (isset($_SESSION['account'])){

                                                //mise à jour du statut dans la table sponsorship
                                                    $req = $pdo->prepare("UPDATE sponsorships
                                                    SET sponsorship_status='Terminé' WHERE sponsored_id = ?");

                                                    $req->execute([$user_id]);

                            } else{
                                //insertion dans la table sponsorship
                                $req = $pdo->prepare('INSERT INTO sponsorships SET
                                date_of_insertion =NOW(), sponsor_id = ?, sponsor_name = ?,
                                sponsored_first_name = ?, sponsored_last_name = ?,
                                sponsored_email = ?, sponsored_id = ?, sponsored_role = ?,
                                sponsorship_status="Terminé"');

                                $req->execute([$sponsor_id, $sponsor_name, $user_first_name,
                                $user_last_name, $user_email, $user_id, $user_role
                            ]);
                            }
			}

                                //On insère le paiement dans la table de suivi des paiements
                                $paymentUpdate = $pdo->prepare('INSERT INTO payments SET date_of_insertion = NOW(),
                                user_id = ?, username= ?, amount_ht = ?, comment = "adhésion", user_role = ?');

                                $paymentUpdate->execute([
                                  $_SESSION['registerId']['id'],
                                    $user_fullname,
                                    $amount_to_pay,
                                    $_SESSION['register']['role']
                                ]);

                        $_SESSION['user'] = [
                            'id' => $user_id,
                            'role' => $_SESSION['register']['role']
                        ];

                        ?>

        <script>
            alert("Identifiants enregistrés avec succès, vous serez redirigé vers votre tableau bord");
            window.location.replace("../tableau-de-bord.php");
            </script><?php
        }

    }
}



function getTransactions(){
    $pdo = getConnexion();
        $req = $pdo->prepare('SELECT * FROM
        transactions ORDER BY id DESC LIMIT 50');
        $req->execute();
        $datas = $req->fetchAll();
        $req->closeCursor();
        sendJSON($datas);
}

function getPendingTransactions(){
    $pdo = getConnexion();
        $req = $pdo->prepare('SELECT * FROM
        transactions WHERE status =     "En attente de validation"');
        $req->execute();
        $datas = $req->fetchAll();
        $req->closeCursor();
        sendJSON($datas);
}


function getTotalTransactionsValue(){
    $pdo = getConnexion();
        $req = $pdo->prepare('SELECT * FROM
        payments');
        $req->execute();
       $tab = array();
       $value = 0;
        while($datas = $req->fetch()){
            $value += $datas['amount'];
        }

        sendJSON($value);
}


function editRate(){
    $pdo = getConnexion();
      if (!empty ($_POST)){

                $errors = array ();

                $id = verifyInput(($_POST['id']));
                $req = $pdo->prepare('SELECT * FROM rates
                WHERE id = ?');
                $req->execute(array($id));

                if (!empty ($_POST['selling_price'])) {
                    $selling_price = verifyInput($_POST['selling_price']);
                    $sql = $pdo->prepare('UPDATE rates SET selling_rate = ?
                    WHERE id = ?');
                    $sql->execute(array($selling_price, $id));

                }

                if (!empty ($_POST['buying_price'])) {
                    $buying_price = verifyInput($_POST['buying_price']);
                    $sql = $pdo->prepare('UPDATE rates SET buying_rate = ?
                    WHERE id = ?');
                    $sql->execute(array($buying_price, $id));
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
alert("Thanks for your message, a reply will be sent to you very soon");
//window.location.replace("../index.php");
</script>
<?php
    }
}


function register(){
    $pdo = getConnexion();
      if (!empty ($_POST)){

                $errors = array ();

                if (empty ($_POST['first_name'])) {
                    $errors['first_name'] = 'Prenom non valide';
                }

                if (empty ($_POST['last_name'])) {
                    $errors['last_name'] = 'Please, check the last name';
                }

                if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                    $errors['email'] ='Please, check the email';
                }

                if (empty ($_POST['phone_number'])) {
                    $errors['phone_number'] = "Please, check the phone number";
                }

                if(!empty($errors)){?>

                    <?php include 'errors.php'; ?>
                    <?php
                    }



                if(empty($errors)){

                        $email = verifyInput($_POST['email']);
                        $first_name = verifyInput($_POST['first_name']);
                        $last_name =  ($_POST['last_name']);
                        $phone_number = ($_POST['phone_number']);
                        $token = str_random(20);

                        $req = $pdo->prepare('INSERT INTO users SET
                        date_of_insertion = NOW(),
                         first_name = ?, last_name = ?,
                        email = ?, phone_number = ?,
                        account_status = "Pending", token = ?,
                        role = "user" ');
                        $req->execute(array($first_name, $last_name,
                        $email, $phone_number, $token));

                        $_SESSION['resgistration'] = [
                            'id' => $pdo->lastInsertId()
                        ];
            }

                        ?>
<script>
alert("Registration completed, please set up your account details");
window.location.replace("https://127.0.0.1:8080/setAccount");
</script>
<?php
    }
}


/*
function getUserById($user_id){
    $pdo = getConnexion();
     $stmt = $pdo->prepare("SELECT *
        FROM users
        WHERE id = ?");
    $stmt->execute(array($user_id));
    $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    sendJSON($datas);
}
*/

function getMyBalance($user_id){
    $pdo = getConnexion();
     $stmt = $pdo->prepare("SELECT balance
        FROM users
        WHERE id = ?");
    $stmt->execute(array($user_id));
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

function getPayments(){
    $pdo = getConnexion();
     $stmt = $pdo->prepare("SELECT * FROM
      payments ORDER BY id DESC");
    $stmt->execute();
    $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    sendJSON($datas);
}

function getRateById($id){
    $pdo = getConnexion();
        $req = $pdo->prepare('SELECT * FROM
        rates WHERE id = ?');
        $req->execute(array($id));
        $datas = $req->fetch(PDO::FETCH_ASSOC);
        $req->closeCursor();
        sendJSON($datas);
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

if($action == 'editRate'){
    editRate();
}

if($action == 'register'){
    register();
}

if($action == 'logout'){
    unset($_SESSION['user']);

    header("Location: ../");
}


