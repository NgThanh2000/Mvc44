<?php
    require_once './models/Database.php';
    require_once './models/interface/interface.php';
    class AdminModel extends Database implements interfaceView{
        private $db_am;
        public function __construct()
        {   
            $this-> db_am = new Database();
        }  
        public function login($id){
            if((isset($id['email'])) && (isset($id['pass']))){
                $str = "SELECT * FROM module WHERE email = '".$id['email']."' and pass ='".$id['pass']."'";
                $data = $this -> db_am -> select($str);
                return $data;
            }
        }
        public function get(){
            $sql ="SELECT * FROM module";
            $data= $this-> db_am -> execute($sql);
            return $data;
        }
        public function insert($values){
            // $created_date = date('d-m-Y h-s-i');
            $sql =" INSERT INTO  module (id,name,email,pass,level,created_date,updated_date) 
            VALUES ('".$values['id']."','".$values['name']."','".$values['email']."','".$values['pass']."','".$values['level']."','".$values['created_date']."','".$values['update_date']."')";
            $this -> db_am -> execute($sql);
        }
        public function created_acc($values){
                    $sql =" INSERT INTO  module (name,email,pass,created_date) 
                    VALUES ('".$values['name']."','".$values['email']."','".$values['pass']."','".$values['created_date']."')";
                    $this -> db_am -> execute($sql);
                }
        public function select($id){
                $str = "SELECT *FROM module WHERE id = '".$id."'";
                $data = $this -> db_am -> select($str);
                return $data;
            }
        public function update($values,$id){
            $sql = "UPDATE module SET  name = '".$values['name']."' , email = '".$values['email']."' , pass = '".$values['pass']."' ,
             created_date = '".$values['created_date']."' ,updated_date = '".$values['updated_date']."' WHERE id = '".$id."'";
            $this -> db_am -> execute($sql);
        }
        // id ='".$values['id']."' ,
        public function delete($id){
            $sql = "DELETE FROM module WHERE id = '".$id."'";
            $this -> db_am -> execute($sql);
        }
      
        // public function getID($id)
        // {
        //     $sql = "SELECT * FROM module WHERE id ='".$id."'";
        //     $data_id = $this -> db_am -> select($str);
        //     return $data_id;
        // }
    }   
    
?>