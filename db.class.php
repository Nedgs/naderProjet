<?php
 
class DataBase {
 
    private $_host;
    private $_dbname;
    private $_username;
    private $_password;
    private $bdd;
 
    public function __construct($_host, $_dbname, $_username, $_password) {
        $this->_host = $_host;
        $this->_dbname = $_dbname;
        $this->_username = $_username;
        $this->_password = $_password;
    }
 
    public function PDOConnexion() {
        $bdd = new PDO('mysql:host='.$this->_host.'; dbname='.$this->_dbname, $this->_username, $this->_password);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->bdd = $bdd;
        return $bdd;
    }


    
 
 
}
 
 
?>
