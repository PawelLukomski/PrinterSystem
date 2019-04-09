<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('memory_limit', -1);
ini_set('max_execution_time', 0);
error_reporting(E_ALL);
require "../vendor/autoload.php";

$request = new \Manager\Request();

$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'],'/')) : '/';

if($url[0] != "/"){
    $request->setRequest($url);
}
else{
    header("Location: /Home");
}
$manager = new \Manager\MainManager();
$nav = $manager->param()['navParams'];
$outTemplate = $manager->param()['outTemplate'];
$controller = new \Controller\Controller();


    if (isset($url[1]) && in_array($url[1], $outTemplate))
        $request->useController();
    else {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>Quickly</title>
            <link rel="stylesheet" href="/assets/styles/style.css">
            <link rel="stylesheet" href="/assets/styles/reset.css">
            <link href="https://fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,700|Permanent+Marker|Sriracha"
                  rel="stylesheet">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
                  integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
                  crossorigin="anonymous">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        </head>
        <body>
        <header class="header_main">
            <h1>Quickly</h1>
            <nav class="nav_main">
                <ul>
                    <?php
                    foreach ($nav as $key => $item)
                        echo "<a href='$item'><li>$key</li></a>";
                    ?>
                </ul>
            </nav>
        </header>
        <div class="main_container">
            <div class="section_container">
                <?php
                $request->useController();
                ?>
            </div>
        </div>
        </body>
        </html>
        <?php
    }

    ?>