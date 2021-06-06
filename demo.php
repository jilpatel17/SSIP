<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    if(isset($_POST['sub']))
    {
        $j = $_POST['demo'];
        $j =trim($j);
        echo strlen($j);
        
    }

    ?>
    <h1>hello</h1>
    <form method="post">
        <input type="text" name="demo">
        <input type="submit" name="sub" value="submit">
    </form>
    
</body>
</html>