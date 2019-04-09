<?php
?>

<h1>Wybierz</h1>

<ul class="ul-list">
    <h1>Projekt</h1>
    <a href="/Print/index/eagles/"> <li>EAGLES</li></a>
    <a href="/Print/index/fgz/"> <li>FGZ</li></a>

<?php

    if(isset($var['forms'][1]))
    {
        $projectDir = scandir($var['dir'].$var['data']['project']);
        echo "<div class='break'></div>";
        echo "<div class='break'></div>";
        foreach ($projectDir as $item) {
            if($item != "." && $item != "..")
            echo "<a href=\"/Print/index/" . $var['data']['project'] . "/$item\"> <li>$item</li></a>";
        }
    }

    if(isset($var['forms'][2]))
    {
        $projectDir = scandir($var['dir'].$var['data']['project']."/".$var['data']['year']);
        echo "<div class='break'></div>";
        echo "<div class='break'></div>";
        foreach ($projectDir as $item) {
            if($item != "." && $item != "..")
            echo "<a href=\"/Print/index/" . $var['data']['project'] . "/" . $var['data']['year'] . "/$item\"> <li>$item</li></a>";
        }
    }

    if(isset($var['forms'][3]))
    {
        if(isset($var['forms'][2]))
        {
            $projectDir = scandir($var['dir'].$var['data']['project']."/".$var['data']['year']."/".$var['data']['dayMonth']);
            echo "<div class='break'></div>";
            echo "<div class='break'></div>";
            foreach ($projectDir as $item) {
                if($item != "." && $item != "..")
                echo "<a href=\"/Print/ToPrint/" . $var['data']['project'] . "/" . $var['data']['year'] ."/".$var['data']['dayMonth']."" . "/$item\"> <li>$item</li></a>";
            }
        }
    }

    if(isset($var['forms'][4]))
    {
        echo "
                
            ";
    }

?>
</ul>

