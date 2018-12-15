<?php
include ("new_config.php");

class Database{
    private $connection;
    public function open_db_connection(){
        $this->connection = mysqli_connect('localhost','root','root','gallery_db');
        if (mysqli_connect_errno()){
            die("Database Connection failed badly".mysqli_error());
        }
    }
}

$database = new Database();
$database->open_db_connection();

?>