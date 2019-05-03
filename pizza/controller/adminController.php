<?php
    require_once __DIR__."/services/mysqlDB.php";
    require_once __DIR__."/services/view.php";

class AdminController{
    protected $db;
    
    public function __construct(){
        $this->db = new MySQLDB("localhost", "root", "", "pizza");
	}

    public function view_admin(){
        session_start();
        if(isset($_SESSION["role"])){
            return View::createViewAdmin('admin.php',[]);
        }
        else{
            header("Location: halamanUtama");
        }
        session_write_close();
    }
}
?>