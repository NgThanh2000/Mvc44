<?php
    require_once './config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách </title>
</head>
<body>
    <?php include_once './views/layout/header.php'; ?>
    <div class="prod">
        <h2>Danh sách bài viết hiện có trên trang</h2>
        <button>
            <a href="?action=addprod">Thêm bài viết</a>
        </button>
        <table style="margin: 0 auto;">
            <thead>
                    <td>ID</td>
                    <td>NAME</td>
                    <td>DESCRIPTION</td>
                    <td>IMAGE</td>
                    <!-- <td>i</td> -->
                    <td>CONTENT</td>
                    <td>AUTHER</td>
                    <td>CREATED_DATE</td>
                    <td>EDIT</td>
                    <td>DELETE</td>
                    
            </thead>
            <tbody>
                <?php
                    $stt=1;
                    foreach($datap as $key =>$value){
                ?>
                <tr>
                    <td><?php echo $stt?></td>
                    <td><?php echo $value['name']?></td>
                    <td><?php echo substr($value['description'], 0,50) ?></td>
                    <!-- <td><?php echo substr($value['img'],0,30)?></td> -->
                    <td><img id="resize" src="<?php echo url_style ?>/<?php echo $value['img']?>" alt=""></td>
                    <td><?php echo substr($value['content'],0,80)?></td>
                    <td><?php echo substr($value['author'],0 ,50) ?></td>
                    <td><?php echo $value['created_date']?></td>
                    <td><a href="?action=editprod&id=<?php echo $value['id'];?>"?>Edit</td>
                    <td><a href="?action=deleteProd&id=<?php echo $value['id'];?>" onclick="return confrim('sure')">Delete</td>
                </tr>
                <?php
                    $stt++;
                    }
                ?>
            </tbody>
        </table>
    </div>
    <?php include_once './views/layout/footer.php'; ?>
</body>
<style>
    .prod{
        margin:0 auto;  
        max-width: 900px;
        padding: 2rem;
        position: relative;
    }
    .prod a{
        text-decoration: none;
    }
    .prod button {
        width: 150px;
        height: 40px;
        position: absolute;
        top: 32px;
        right: 35px
    }
    .prod table{
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
    #resize{
        width: 100px;
        height: 100px;
    }
</style>
</html>