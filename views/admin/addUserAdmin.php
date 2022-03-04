<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User and Admin</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>ID</td>
                <td><input type="text" name="id" id="id"></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id="email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="pass" id="pass"></td>
            </tr>
            <tr>
                <td>Level</td>
                <td><input type="text" name="level" id="level"></td>
            </tr>
            <tr>
                <td>Created_date</td>
                <td><input type="datetime-local" name="created_date" id="created_date"></td>
            </tr>
            <tr>
                <td>Update_date</td>
                <td><input type="datetime-local" name="update_date" id="update_date"></td>
            </tr>
            <tr>
                <td><input type="submit" name ="add" onclick="alert('Thêm thành công')"></td>
            </tr>
        </table>
    </form>
</body>
<script></script>
</html>