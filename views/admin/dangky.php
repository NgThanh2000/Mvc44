<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1>Đăng ký</h1>
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Pass</td>
                <td><input type="text" name="pass"></td>
            </tr>
            <tr>
                <td>Created_date</td>
                <td><input type="datetime-local" name="created_date"></td>
            </tr>
            <tr>
                <td><input type="submit" name="dangky" onclick="alert('Đăng ký thành công')"></td>
            </tr>
        </table>
    </form>
</body>
</html>