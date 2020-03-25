<!DOCTYPE html>
<html>

<head>
        <title>netland</title>
        <meta charset="UTF-8">
</head>

<body>

        <?php
        $host = 'localhost';
        $data   = 'netland';
        $gebruiker = 'root';
        $pass = '';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dataname=$data;charset=$charset";
        $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
                $pdo = new PDO($dsn, $gebruiker, $pass, $options);
        } catch (\PDOException $i) {
                throw new \PDOException($i->getMessage(), (int) $i->getCode());
        }

        echo $pdo->query('select version()')->fetchColumn() . PHP_EOL;

        ?>

</body>

</html>