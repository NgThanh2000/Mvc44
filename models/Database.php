<?php
require_once './config/config.php';
    class Database{
        private $conn;
        private $result;
        public function __construct()
        {
            $this->connect();
        }
        //kết nối data
        public function connect()
        {
            $this-> conn = new mysqli(host,user,pass,database);
            if( $this-> conn-> connect_error){
                die("thatbai".$this-> conn-> connect_error);
            }
            else{
                mysqli_set_charset($this->conn, "utf8");
            }
            return $this->conn;
        }
        //truy vấn data
        public function execute($sql)
        {
            $this-> result = $this-> conn ->query($sql);

            return $this-> result;    
        }
        //
        public function select($str)
        {
            $result = $this->conn->query($str);
            if($result -> num_rows == 0){
                $data =0;
            }else{
                while($row = $result-> fetch_assoc()){
                    $data[] = $row;
                }
            } 
            return $data;
        }
        //ngắt kết nối
        public function dissConn()
        {
            if($this->con){
                mysqli_close($this->conn);
            }
        }
    }
         // public function Select($str)
        // {
        //     $result=$this->conn->query($str);
        //     if ($result->num_rows==0) {
        //         $data=0;
        //     }else{
        //         while ($row=$result->fetch_assoc()) {
        //             $data[]=$row;
        //         }
        //     }
        //     return $data;
        // }
        // $t= new Database();
        
        // $sql= "SELECT * FROM module";
        // $t ->select($trs);
        // $t->execute($sql);
        // $d =  $data;
        // var_dump($d);

        // private $host = "localhost";
        // private $user = "root";
        // private $pass = "";
        // private $database = "advancedphp";
?>