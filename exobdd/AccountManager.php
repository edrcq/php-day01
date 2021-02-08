<?php 

class AccountManager {

    private $_db;

    function __construct($db) {
        $this->setDb($db);
    }

    function setDb(PDO $db) {
        $this->_db = $db;
    }

    public function getByEmail($email) {
        $query = $this->_db->prepare('SELECT * FROM users WHERE email = :email');
        $query->bindValue(':email', $email); // on remplace :email par le contenu de $email
        $query->execute(); // la requete est executee
        $data = $query->fetch();
        if ($data === false) { return false; }
        $account = new Account();
        $account->hydrate($data);
        return $account;
    }

    public function add($user) {
        $query = $this->_db->prepare('INSERT INTO users (email, password) VALUES (?, ?)');
        $query->execute([
            $user['email'],
            $user['password']
        ]); // la requete est executee
        
        $id = $this->_db->lastInsertId();
        return $id;
    }
}

?>