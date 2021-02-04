<?php
require_once('connect_db.php');

require_once('models/experience.php');
require_once('models/workSkill.php');


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

    public function getAllExperiences(){

        $stmt = $this->_handler->prepare("SELECT * FROM experience");

        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_OBJ);
        $experiences = [];
        foreach ($res as $experience){
            array_push(
                $experiences,
                new Experience(
                    $experience->id,
                    $experience->entry_date,
                    $experience->job,
                    $experience->company,
                    $experience->position,
                    $experience->periode,
                    $experience->description)
                );
        }
        return $experiences;
    }

    public function getAllWorkSkills(){

        $stmt = $this->_handler->prepare("SELECT * FROM work_skill");

        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_OBJ);
        $work_skills = [];
        foreach ($res as $work_skill){
            array_push(
                $work_skills,
                new WorkSkill(
                    $work_skill->id,
                    $work_skill->language,
                    $work_skill->percentage)
                );
        }
        return $work_skills;
    }

}

    ?>