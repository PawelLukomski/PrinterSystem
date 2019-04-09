<?php
?>
<h1>Sprawdź czy wszystkie pliki się zgadzają</h1>
<div class="ul-list">
    <ul>
        <?php
        foreach ($var['scan'] as $file)
        {
            if($file != "." && $file != "..") {
                if(is_dir($file))
                {
                    $underDir = scandir($var['dir'].$file);
                    echo "<li class='li-name'>".$file."</li>";
                    foreach ($underDir as $item)
                    {
                        if($item != "." && $item != "..")
                            echo "<li class='li-under'>>> " . $item . "</li>";
                    }
                }
                else {
                    echo "<li>" . $file . "</li>";
                }

            }
        }
        ?>
    </ul>
</div><div class="section_btn">
    <button class="btn_link" name="yes">Zgadzają się</button>
</div>

