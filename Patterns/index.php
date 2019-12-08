<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 26.07.2019
 * Time: 23:15
 */

header("Content-Type: text/html; charset=utf-8");
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
?>

<html>
<?php include_once __DIR__ . "/PageParts/Head.php"?>
<body>
    <div class="content-container">
        <?php include_once __DIR__ . "/PageParts/Menu.php"?>
        <?php include_once __DIR__ . "/PageParts/Content.php"?>
    </div>
</body>
</html>