<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User and Admin</title>
</head>
<body>
    <div class="edit">
    <h1>Edit here</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $dataid[0]['name']?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $dataid[0]['email']?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="pass" value="<?php echo $dataid[0]['pass']?>"></td>
            </tr>
            <tr>
                <td>Level</td>
                <td><input type="text" name="level" value="<?php echo $dataid[0]['level']?>"></td>
            </tr>
            <tr>
                <td>Created_date</td>
                <td><input type="text" name="created_date" value="<?php echo $dataid[0]['created_date']?>"></td>
            </tr>
            <tr>
                <td>Updated_date</td>
                <td><input type="text" name="updated_date" value="<?php echo $dataid[0]['updated_date']?>"></td>
            </tr> 
            <tr>
                <td><input type="submit" name="edit" value="Xác nhận" onclick="alert('Bạn có chắc muốn lưu thay đổi này chứ?')"></td>
            </tr>
        </table>
    </form>
    </div>
</body>
<style>
    .edit{
        width: 100%;
        height: 100%;

    }
    .edit form{
        margin: 0 auto;
    }
</style>
</html>