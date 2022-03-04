<?php
    session_start();
    require_once "models/AdminModel.php";
    require_once "./models/ProdModel.php";
    require_once "./session/session.php";
    class AdminControlller{
        private $model;
        private $modelProd;
        public function __construct()
        {
            $this ->model = new AdminModel;
            $this ->modelProd = new ProdModel;
        }

        public function admin()
        {
            if(isset($_GET['action'])){
                $action= $_GET['action'];
            } else{
                $action = '';
            }
            switch ($action){
                case 'admin':
                    $data = $this -> model ->get();
                    include_once './views/admin/adminView.php';   
                    break;  
                case 'add':
                    include_once './views/admin/addUserAdmin.php';
                    if(isset($_POST['add']))
                    {   
                        
                        $id = $_POST['id'];
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $pass = $_POST['pass'];
                        $level = $_POST['level'];
                        $created_date = $_POST['created_date'];
                        $update_date = $_POST['update_date'];
                        
                        $this -> model -> insert($_POST);
                        header('location: ?action=admin');
                    }
                    // include_once './views/admin/addUserAdmin.php';
                    
                    break;
                case 'edit':
                    if(isset($_GET['id']))
                    {
                        $id = $_GET['id'];
                        $dataid = $this -> model -> select($id);

                            if(isset($_POST['edit']))
                            {
                                $name = $_POST['name'];
                                $email = $_POST['email'];
                                $pass = $_POST['pass'];
                                $level = $_POST['level'];
                                $created_date = $_POST['created_date'];
                                $updated_date = $_POST['updated_date'];
                                
                                $this -> model -> update($_POST,$id);
                                header('location: ?action=admin');
                            }
                            include_once './views/admin/editUserAdmin.php';
                    }
                    break;    
                case 'delete':
                    if(isset($_GET['id'])){
                        $this -> model ->delete($_GET['id']);
                        header('location: ?action=admin');
                    }
                    break;
                case 'login':
                   
                    include_once './views/admin/login.php';
                    if((isset($_POST['email']) && isset($_POST['pass']))){
                        $email = $_POST['email'];
                        $pass = $_POST['pass'];
                    } 
                  
                    if(isset($_POST['login_admin'])){
                        if((empty($_POST['email']) || empty($_POST['pass'])) || (empty($_POST['email']) && empty($_POST['pass']))){
                            echo 'Vui lòng nhập đầy đủ thông tin'.'</br>';
                              if($format = $this -> format_email()){
                                    return $format;
                                };
                        }
                    }
                    if($data =$this->model ->login($_POST)){
                        Session::setSeccion("login",$data);

                        if ($data[0]['level'] == 1){
                            // header('location: ?action=admin');
                            header('location: ?action=home');
                            var_dump( $data);
                            break;
                        }else if ($data[0]['level'] == 0){
                            header('location: ?action=home');
                            // require_once ('./views/indexProd.php');
                            // include_once './controllers/ProdController.php';
                            break;
                        }
                    }include_once './views/admin/login.php';
                    break;

                case 'logout':
                    $data = $this -> modelProd -> get();
                    Session::deleteSeccion('login');
                    include_once './views/admin/home.php';
                    // header('location: ?action=home');
                    
                    break;
                
                case 'created_acc': 
                    include_once './views/admin/dangky.php';
                    if(isset($_POST['dangky']))
                    {   
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $pass = $_POST['pass'];
                        $created_date = $_POST['created_date'];
                        $level = 0;
                        $this -> model -> created_acc($_POST); 
                        // if(empty($_SESSON['login'])){
                        //     header('location: ?action=homeuser');
                        // }else{
                        //     header('location: ?action=home');
                        // }
                        header('location: ?action=home');
                    }
                    // include_once './views/admin/home.php';
                    
                    //sau này chuyển về home cua user
                    break;
//***************************************************************** */                
                case 'prod':
                    $datap = $this-> modelProd ->get();
                    include_once './views/client/prodView.php';          
                    break;
                
                case 'addprod':
                    include_once './views/client/addProd.php';
                    if(isset($_POST['addprod'])){
                        // $id =$_POST['id'];
                        $name = $_POST['name'];
                        $description = $_POST['description'];
                        $img = $_POST['img'];
                        $content = $_POST['content'];
                        $author = $_POST['author'];
                        $created_date = $_POST['created_date'];

                        $this -> modelProd -> insert($_POST);
                        header('location: ?action=prod');
                    }                   
                            // $imgUpFile= basename($_FILES['img']['name']);
                            // $target_dir = "style/img/";
                            // $target_file = $target_dir . $imgUpFile;
                            // move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);                       
                    break;
                case 'editprod':
                   
                        if(isset($_GET['id'])){
                            $id =$_GET['id'];
                            $dataid = $this ->modelProd -> select($id);
                            if(isset($_POST['editProd'])){
                                $name = $_POST['name'];
                                $description = $_POST['description'];
                                $img = $_POST['img'];
                                $content = $_POST['content'];
                                $author = $_POST['author'];
                                $created_date = $_POST['created_date'];
                                
                                $this -> modelProd -> update($_POST,$id);
                                header('location: ?action=prod');
                            }include_once './views/client/editProd.php';
                        }
                        
                        break; 
                case 'deleteProd':
                        if(isset($_GET['id'])){
                            $this -> modelProd ->delete($_GET['id']);
                            header('location: ?action=prod');
                        }
                        break;
                case 'news':
                        if(isset($_GET['id'])){
                            $id =$_GET['id'];
                            $dataid = $this ->modelProd -> select($id);
                                // $name = 'name';
                                // $description = 'description';
                                // $img = 'img';
                                // $content = 'content';
                                // $author = 'author';
                                // $created_date = 'created_date';
                            include_once './views/client/new.php';
                        }
                        break;
                default:
                     $data = $this -> modelProd -> get();
                    include_once './views/admin/home.php';
                    break;
            }        
        }
        public function format_email(){
            $error= array();
            if(isset($_POST['email'])){
                $email = $_POST['email'];
                if(!preg_match("/^[a-zA-Z0-9]*\@[a-zA-Z0-9]*\.[a-zA-Z0-9]*$/ix" ,$email)){
                    echo $error='Lỗi! Email phải có định dạng : name567@gmail.com'.'</br>';
                }
            }
        }
    }
?>