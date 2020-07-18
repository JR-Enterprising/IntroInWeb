<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curs 1</title>
<?php
    require_once './credentials.php';
?>
</head>
<body>
    <?php
        $db = new mysqli(HOST,USER,SECRET,DB,PORT);
        $result = ((object)$db->query('SELECT secret_key FROM env LIMIT 1')->fetch_assoc())->secret_key;
        echo 'Secret Access Key: '.$result;
    ?>
</body>
</html>