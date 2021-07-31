<?php

include "../Model/database.php";
session_start();
class lagestion extends database {
    public function gestion() {
        if(isset($_SESSION['id'])){
            $getid = intval($_SESSION['id']);
            $requser = $this->connect()->prepare('SELECT * FROM membres WHERE id = ?');
            $requser->bindParam(1, $getid);
            $requser->execute();
            return $requser->fetch();
        }
    }
}
?>