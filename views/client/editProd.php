<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Prod</title>
</head>
<body>
    <h1>Edit here</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $dataid[0]['name']?>"></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><input type="text" name="description" value="<?php echo $dataid[0]['description']?>"></td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input type="file" name="img" value="<?php echo $dataid[0]['img']?>"></td>
            </tr>
            <tr>
                <td>Content</td>
                <td><textarea name="content" id="" cols="30" rows="10"><?php echo $dataid[0]['content']?></textarea></td>
                <!-- <td><input type="text" name="content" value="<?php echo $dataid[0]['content']?>"></td> -->
            </tr>
            <tr>
                <td>Author</td>
                <td><input type="text" name="author" value="<?php echo $dataid[0]['author']?>"></td>
            </tr> 
            <tr>
                <td>Created_date</td>
                <td><input type="datetime-local" name="created_date" value="<?php echo $dataid[0]['created_date']?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="editProd" value="Xác nhận" onclick="alert('Bạn có chắc muốn lưu thay đổi này chứ?')"></td>
            </tr>
        </table>
    </form>
</body>
</html>