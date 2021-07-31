<?php

$requser = $this->connect()->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
$requser->bindParam(1, $mailconnect);
$requser->bindParam(2, $mdpconnect);
$requser->execute();
$userexist = $requser->rowCount();

?>