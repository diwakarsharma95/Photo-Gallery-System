<?php
include ("new_config.php");

class Database{

    public $connection;

    function __construct()
    {
        $this->open_db_connection();
    }

    public function open_db_connection(){
        $this->connection = mysqli_connect('localhost','root','root','gallery_db');
        if (mysqli_connect_errno()){
            die("Database Connection failed badly".mysqli_error());
        }
    }
    public function query($sql){
        $result = mysqli_query($this->connection, $sql);
        if (!$result){
            die("Query Failed".mysqli_error());
        }
        return $result;
    }
}

$database = new Database();
$database->open_db_connection();

?>