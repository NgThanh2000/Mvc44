<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm bài viết</title>
</head>
<body>
    <form action="" method="POST" enctype="application/x-www-form-urlencoded">
        <table>
            <!-- <tr>
                <td>ID</td>
                <td><input type="number" name="id"></td>
            </tr> -->
            <tr>
                <td>NAME</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>DESCRIPTION</td>
                <td><textarea name="description"cols="25" rows="5"></textarea></td>
                <!-- <td><input type="text" name="description"></td> -->
            </tr>
            <tr>
                <td>IMAGE</td>
                <td><input type="file" name="img"></td>
            </tr>
            <tr>
                <td>CONTENT</td>
                <td><textarea name="content"cols="30" rows="10"></textarea></td>
                <!-- <td><input type="text_area" name="content"></td> -->
            </tr>
            <tr>
                <td>AUTHOR</td>
                <td><input type="text" name="author"></td>
            </tr>
            <tr>
                <td>CREATED_DATE</td>
                <td><input type="datetime-local" name="created_date"></td>
            </tr>
            <tr>
                <td><input type="submit" name="addprod" value="ADD"></td>
            </tr>
        </table>
    </form>
</body>
</html>