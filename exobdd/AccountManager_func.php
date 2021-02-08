<?php 


function account_getByEmail($email) {
    global $db;

    $query = $db->prepare('SELECT * FROM users WHERE email = :email');
    $query->bindValue(':email', $email); // on remplace :email par le contenu de $email
    $query->execute(); // la requete est executee
    $data = $query->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function account_add($user) {
    global $db;

    $query = $db->prepare('INSERT INTO users (email, password) VALUES (?, ?)');
    $query->execute([
        $user['email'],
        $user['password']
    ]); // la requete est executee
    
    $id = $db->lastInsertId();
    return $id;
}


?>