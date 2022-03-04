<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <?php require_once './views/layout/header.php';?>
    <div class="add">
    <h2>Danh sách tài khoản</h2>
        <table style="margin: 0 auto;">
            <thead>
                    <td>ID</td>
                    <!-- <td>ID</td> -->
                    <td>NAME</td>
                    <td>EMAIL</td>
                    <td>PASSWORD</td>
                    <td>LEVEL</td>
                    <td>CREADATED_DATE</td>
                    <td>UPDATED_DATE</td>
                    <td>EDIT</td>
                    <td>DELETE</td>
            </thead>
            <tbody>
                    <?php
                        $stt=1;
                        foreach($data as $key => $value)
                        {
                    ?>
                <tr>
                    <td><?php echo $stt?></td>
                    <!-- <td><?php echo $value['id']?></td> -->
                    <td><?php echo $value['name']?></td>
                    <td><?php echo $value['email']?></td>
                    <td><?php echo $value['pass']?></td>
                    <td><?php echo $value['level']?></td>
                    <td><?php echo $value['created_date']?></td>
                    <td><?php echo $value['updated_date']?></td>   
                    <td><a href="?action=edit&id= <?php echo $value['id'];?>">Edit</a></td>  
                    <td><a href="?action=delete&id=<?php echo $value['id'];?>" onclick="return comfirm('sure')">Delete</a></td> 
                    <!-- <?php echo $value['id'];?> -->
                </tr>
                    <?php
                        $stt++;
                        }
                    ?>
            </tbody>
        </table>
        <button>
            <a href="?action=add">Thêm user hoặc admin</a>
        </button>
    </div>
    <?php require_once './views/layout/footer.php';?>
</body>
<style>
    .add h2{
        text-align: center;
    }
    .add{
        margin:0 auto;  
        max-width: 900px;
        padding: 2rem;
        position: relative;
    }
    .add a{
        text-decoration: none;
    }
    .add button {
        width: 150px;
        height: 40px;
        position: absolute;
        top: 84px;
        right: -110px
    }
    .add table{
        padding: 1.5rem 0;
    }
    table thead td{
        background-color:darksalmon;
    }
    table tr td{
        border: 1px solid gainsboro;
        padding: .4rem;
    }
    table tbody tr td:nth-child(1){
        background-color:gold;
    }
</style>
</html>

