<?php
 session_start();
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

    ?>
        <script>
             window.location.replace("http://127.0.0.1:8080/");
        </script>
    <?php
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
            $errors['username'] = 'Please check the username';
        } else {
            $req = $pdo->prepare(
                'SELECT id FROM users WHERE username = ?'
            );
            $req->execute([$_POST['username']]);
            $user = $req->fetch();
            if ($user) {
                $errors['username'] = 'Username unavailable';
            }
        }

        if (empty($_POST['password1'])) {
            $errors['password1'] =
                'Please check the password';
        }

        if ($_POST['password2'] != $_POST['password1']) {
            $errors['password2'] =
                'Please check the passwords';
        }

        if (!empty($errors)) { ?>
            errors: <br>
                <ul>
            <?php foreach ($errors as $error): ?>
            <li style="color: red"><?= $error; ?></li>
            <?php endforeach;?>
        </ul>
        <?php }

        if (empty($errors)) {

            $user_id = $_SESSION['registration']['id'];
            //mise à jour du compte adhérent

            $req = $pdo->prepare("UPDATE users SET  username= ?,
            pass = ?, account_status ='active'
            WHERE id = ?");

                $username = verifyInput($_POST['username']);
            $password = password_hash(
                $_POST['password1'],
                PASSWORD_BCRYPT
            );

            $req->execute([
                $username,
                $password,
                $user_id
            ]);

            $_SESSION['user'] = [
                            'id' => $user_id,
                            'role' => $_SESSION['register']['role'],
                            'username' => $username
                        ];

                        ?>

        <script>
            alert("Done, you will be redirected to your dashboard");
            window.location.replace("http://127.0.0.1:8080/dashboard");
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
window.location.replace("http://127.0.0.1:8080/setAccount");
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

if($action == 'setAccount'){
    setAccount();
}

if($action == 'logout'){
    unset($_SESSION['user']);

    header("Location: ../");
}


function sendJSON($infos){
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    echo json_encode($infos,JSON_UNESCAPED_UNICODE);
}
