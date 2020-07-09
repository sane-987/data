<html>
<head>

<?php

    $dsn="mysqlhost=localhost,dbname=logindb";
    $username='root';
    $password='';
    
    $pdo=new pdo($dsn,$username,$password);

    $driver=pdo->getAttribute(PDO::ATTR_DRIVER_NAME);
    echo "driver name:".$driver;

?>

</head>
<body>
    
</body>
</html>