<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/css/header.css">
</head>
<body>
    <div class="header">
        <div class="in_header">
            <div class="in_header-logo">
                <img src="./style/img/logo.png" alt="" >
            </div>
            <div class="in_header-bc">
                <ul>
                    <li><a href="?action=home">Trang chủ</a></li>
                    <li><a href="#">Nhóm</a></li>
                    <li><a href="#">Sự kiện</a></li>
                    <li><a href="#">Sách</a></li>
                    <li><a href="#">Cộng đồng</a></li>
                    <li><a href="#">Giới thiệu</a></li> 
                </ul>
            </div>
            <div class="in_header-right">              
                <div class="sreach">
                    <form action="">
                         <input type="search">
                        <button type="submit">Tìm kiếm</button>
                        </form>
                </div>
                <div class="login">
                    <div class="account">
                            <?php
                            if(isset($_SESSION['login']) && ($_SESSION['login'][0]['level']==0 || $_SESSION['login'][0]['level']==1)){
                                if($_SESSION['login'][0]['level'] == 1){
                                    echo "Hello ".($_SESSION['login'][0]['name']) ;
                                    echo '<a href="?action=admin">Admin List</a>';
                                    echo '<a href=?action=prod>Product List</a>';
                                }
                                if($_SESSION['login'][0]['level'] == 0){
                                    echo $_SESSION['login'][0]['name']." ".'USER';
                                }                       
                            }
                            ?>
                        </div>
                    <div class="dang">
                        <div class="dangky">
                                <?php
                                    if(!empty($_SESSION['login'])){
                                        echo '';
                                    }else{
                                        echo '<a href="?action=created_acc">Đăng ký</a>';
                                    }
                                ?>
                        </div>
                        <div class="dangnhap">
                            <?php
                                if(!empty($_SESSION['login'])){
                                    echo '';
                                }else{
                                    echo '<a href="?action=login">Đăng nhập</a>';
                                }
                            ?>
                        </div>
                        <div class="dangxuat" onclick="alert('Bạn có chắc muốn đăng xuất!')">
                            <?php
                                    if(empty($_SESSION['login'])){
                                        echo '';
                                    }else{
                                        echo '<a href="?action=logout">Đăng xuất</a>';
                                    }
                            ?>                       
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<style>
.header a{
    text-decoration: none;
    font-size: 1.3rem;
}
.header a:hover{
    color:olive;
    background-color: whitesmoke;
}
.in_header{
    height: 100%;
}
.account{
    border: 1px darkgoldenrod dotted solid;
}
.account a{
    display: block;
}

.in_header-right {
    width: 35%;
   display: flex;
   justify-content: space-around;
   align-items: center;
}
.sreach{
    position: relative;
}
.sreach input{
    width: 220px;
    height: 1.6rem;
}
.sreach button{
    height: 1.6rem;
    position: absolute;
    right: 0px;
}
</style>

