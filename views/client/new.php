<?php
    require_once './views/layout/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bản tin</title>
</head>
<body>
    <div class="new">
        <h2><?php echo $dataid[0]['name']?></h2>
        <h6><?php echo $dataid[0]['description']?></h6>
        <small>
            <?php echo $dataid[0]['created_date']?>
            <address><?php echo $dataid[0]['author']?></address>
        </small>
        <img src="./style/img/<?php echo $dataid[0]['img']?>" alt="">
        <p><?php echo $dataid[0]['content']?></p>

    </div>
    <!-- <?php echo $dataid[0]['img']?> -->
</body>
<style>
    .new{
        margin: 0 auto;
        padding: 1.5rem;
        width: 800px;
        height: auto;
    }
    .new img{
        margin:0 auto;
        width: 400px;
        height: 350px;
    }
</style>
</html>
<?php
    require_once './views/layout/footer.php';
?>