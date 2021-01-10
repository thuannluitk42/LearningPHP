<?php

class Database
{

    public $host = DB_HOST;

    public $user = DB_USER;

    public $pass = DB_PASS;

    public $dbname = DB_NAME;

    public $link;

    public $error;

    public function __construct()
    {
        $this->connectDB();
    }

    private function connectDB()
    {
        $this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);

        if (! $this->link) {
            $this->error = "connection fail" . $this->link->connect_error;
        } else {
            return FALSE;
        }
    }

    // select or read data from database
    public function select($query)
    {
        $result = $this->link->query($query) or die($this->link->error . __LINE__);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }
    
    // insert data 
    public function insert($query) {
        $insert_row = $this->link->query($query) or die($this->link->error . __LINE__);
        if($insert_row){
            header("Location: index.php?msg=".urlencode('Data insert successfully'));
            exit();
        }else {
            die("Error: (".$this->link->error.")".$this->link->error);
        }
    }
    
    // update data
    public function update($query) {
        $update_row = $this->link->query($query) or die($this->link->error . __LINE__);
        if($update_row){
            header("Location: index.php?msg=".urlencode('Data update successfully'));
            exit();
        }else {
            die("Error: (".$this->link->error.")".$this->link->error);
        }
    }
    
    // delete data
    public function delete($query) {
        $delete_row = $this->link->query($query) or die($this->link->error . __LINE__);
        if($delete_row){
            header("Location: index.php?msg=".urlencode('Data delete successfully'));
            exit();
        }else {
            die("Error: (".$this->link->error.")".$this->link->error);
        }
    }
}
?>