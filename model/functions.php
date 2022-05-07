<?php

try
{
	$pdo = new PDO('mysql:host=localhost;dbname=rapidnote;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

//controle des input
function verifyInput($inputContent){
        $inputContent = htmlspecialchars(
            $inputContent
        );
    
        $inputContent = trim($inputContent);
    
        return $inputContent;
    }
    

$error = array('error' => false);
$action = '';

if(isset($_GET['action'])){
        $action = $_GET['action'];
}

if($action == 'read'){
        $sql = $pdo->prepare("SELECT * FROM users");
        $sql->execute();
        $users = array();
        while ($row = $sql->fetch()){
                array_push($users, $row);
        }
        $results['users'] = $users;
}

if($action == 'register'){
        $first_name = verifyInput($_POST['first_name']);
        $last_name = verifyInput($_POST['last_name']);
        $username = verifyInput($_POST['user_name']);
        $city = verifyInput($_POST['city']);
        $country = verifyInput($_POST['country']);
        $email = verifyInput($_POST['email']);
        $phone_code = verifyInput($_POST['phone_code']);
        $phone_number = verifyInput($_POST['phone_number']);
        $pass = password_hash(
                $_POST['password1'],
                PASSWORD_BCRYPT
            );

        $sql = $pdo->prepare("INSERT INTO users SET date_of_insertion = NOW(),
        first_name = ?, last_name =?, email = ?, city = ?, country = ?, 
        phone_code = ?, phone_number = ?, pass = ? , username = ?");

        $sql->execute(array($first_name, $last_name, $email, $city, $country,
        $phone_code, $phone_number, $pass, $username ));

        if($sql){
                $results['message'] = 'Inscription réussie';
        } else{
                $results['error'] = true;
                $results['message'] = 'Une erreur est survenue';
        } 
}


if($action == 'update'){
        $id = $_POST['id'];
        $first_name = verifyInput($_POST['first_name']);
        $last_name = verifyInput($_POST['last_name']);
        $username = verifyInput($_POST['user_name']);
        $city = verifyInput($_POST['city']);
        $country = verifyInput($_POST['country']);
        $email = verifyInput($_POST['email']);
        $phone_code = verifyInput($_POST['phone_code']);
        $phone_number = verifyInput($_POST['phone_number']);
        $pass = password_hash(
                $_POST['password1'],
                PASSWORD_BCRYPT
            );

        $sql = $pdo->prepare("UPDATE users SET 
        first_name = ?, WHERE id = ?");

        $sql->execute(array($first_name, $d ));

        if($sql){
                $results['message'] = 'Modification réussie';
        } else{
                $results['error'] = true;
                $results['message'] = 'Une erreur est survenue';
        } 
}

if($action == 'delete'){
        $id = $_POST['id'];

        $sql = $pdo->prepare("DElETE FROM users WHERE id = ?");

        $sql->execute(array($id ));

        if($sql){
                $results['message'] = 'Suppresion réussie';
        } else{
                $results['error'] = true;
                $results['message'] = 'Une erreur est survenue';
        } 
}


echo json_encode($results);

$sql->closeCursor();
?>