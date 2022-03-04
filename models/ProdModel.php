<?php
    require_once './models/Database.php';
    require_once './models/interface/interface.php';
    class ProdModel extends Database implements interfaceView{
        private $db_prd;
        public function __construct()
        {
            $this->db_prd = new Database();
        }
        public function get(){
            $sql = "SELECT * FROM prod";
            $datap = $this-> db_prd -> execute($sql);
            return $datap;
        }
        public function insert($value){
            $sql = "INSERT INTO prod ( name, description,img, content, author, created_date) 
            VALUE ('".$value['name']."','".$value['description']."',
            '".$value['img']."','".$value['content']."','".$value['author']."','".$value['created_date']."')" ;
            $this-> db_prd -> execute($sql);
        }
        public function select($id)
        {
            $str = "SELECT * FROM prod WHERE id ='".$id."'";
            $data = $this -> db_prd -> select($str);
            return $data;
        }
        public function update($value,$id){
            $sql = "UPDATE prod SET name = '".$value['name']."',description = '".$value['description']."',img ='".$value['img']."',
            content = '".$value['content']."', author = '".$value['author']."', created_date = '".$value['created_date']."'
            WHERE id = '".$id."'" ;
            $this ->db_prd -> execute($sql);
        }
        public function delete($id)
        {
            $sql = "DELETE FROM prod WHERE id = '".$id."'";
            $this -> db_prd -> execute($sql);
        }
    }
?>