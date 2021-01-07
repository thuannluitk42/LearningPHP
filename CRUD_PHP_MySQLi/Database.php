<?php
class Database {
    public $host = DB_HOST;
    public $user = DB_USER;
    public $pass = DB_PASS;
    public $dbname = DB_NAME;
    
    public $link;
    public $error;
    
    private function connectDB() {
        $this->link = new mysqli($this->host,$this->user,$this->pass,$this->dbname);
        
        if(!$this->link){
            $this->error = "connection fail".$this->link->connect_error;
        }else{
            return FALSE;
        }
    }
}
?>