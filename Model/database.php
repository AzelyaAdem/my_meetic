<?php 
define('USERNAME2', 'root');
define('PASSWORD2', '');
define('DSN2', "mysql:host=localhost;dbname=toto");
class database{

    private static $bdd;

    public static function connect()
    {
        if(!self::$bdd)
        {
            try
            {
                self::$bdd = new PDO(DSN2, USERNAME2, PASSWORD2);
                self::$bdd->setAttribute(PDO::ATTR_PERSISTENT, true);
                self::$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $var)
            {
                die("pdo connection error! " . $var->getMessage() . "<br/>");
            }
        }
        return self::$bdd;
    }
}$var = new database();
$bdd = $var->connect();
?>