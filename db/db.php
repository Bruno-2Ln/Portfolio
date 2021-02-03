<?php

class DatabaseHandler{
    private string $_dbname;
    private string $_adminname;
    private string $_password;
    private PDO $_handler; //va renfermer l'objet PDO qui sera instancié par la méthode connect().

    public function __construct(string $dbname, string $adminname, string $password){
        $this->_dbname = $dbname;
        $this->_adminname = $adminname;
        $this->_password = $password;

        $this->connect(); //pour permettre une connexion automatique à chaque instanciation de DatabaseHandler.
    }

    public function connect(){
        try {
            $dbh = new PDO("mysql:host=localhost;charset=utf8;dbname={$this->_dbname}", $this->_adminname, $this->_password, [PDO::ATTR_EMULATE_PREPARES => false]);
        } catch (PDOException $e){

            http_response_code(500);
            die("500 - Internal Server Error");
        }

        $this->_handler = $dbh;
    }
}

    ?>