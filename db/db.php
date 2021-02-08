<?php
require_once('connect_db.php');

require_once('models/experience.php');
require_once('models/workSkill.php');
require_once('models/quality.php');
require_once('models/menu.php');
require_once('models/project.php');
require_once('models/message.php');

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
            $dbh = new PDO("mysql:host=brunodpbdliz.mysql.db;charset=utf8;dbname={$this->_dbname}", $this->_adminname, $this->_password, [PDO::ATTR_EMULATE_PREPARES => false]);
        } catch (PDOException $e){

            http_response_code(500);
            die("500 - Internal Server Error !");
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

    public function getAllQualities(){

        $stmt = $this->_handler->prepare("SELECT * FROM quality ORDER BY quality.ranking");

        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_OBJ);
        $qualities = [];
        foreach ($res as $quality){
            array_push(
                $qualities,
                new Quality(
                    $quality->id,
                    $quality->ranking,
                    $quality->quality
                )
            );
        }
        return $qualities;
    }

    public function getAllMenuOptions(){

        $stmt = $this->_handler->prepare("SELECT * FROM menu");

        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_OBJ);
        $menuOptions = [];
        foreach ($res as $menuOption){
            array_push(
                $menuOptions,
                new MenuOption(
                    $menuOption->id,
                    $menuOption->href,
                    $menuOption->name
                )
            );
        }
        return $menuOptions;
    }

    public function getAllProjects(){

        $stmt = $this->_handler->prepare("SELECT * FROM projet ORDER BY order_apparition");

        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_OBJ);
        $projects = [];
        foreach ($res as $project){
            array_push(
                $projects,
                new Projet(
                    $project->id,
                    $project->order_apparition,
                    $project->title,
                    $project->short_description,
                    $project->description,
                    $project->href,
                    $project->image,
                    $project->vague,
                    $project->link,
                    $project->icone
                )
            );
        }
        return $projects;
    }

    public function getAllMessages(){

        $stmt = $this->_handler->prepare("SELECT * FROM message");

        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_OBJ);
        $messages = [];
        foreach ($res as $message){
            array_push(
                $messages,
                new Message(
                    $message->id,
                    $message->title,
                    $message->variable_session,
                    $message->text,
                )
            );
        }
        return $messages;
    }




}

    ?>