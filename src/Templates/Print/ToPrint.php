<?php
    foreach ($var['data'] as $key => $data)
    {
        foreach ($data as $datum)
        {
            if(is_array($datum))
            {
                foreach ($datum as $item)
                    echo $item."<br>";
            }
            else
                echo $datum."<br><br>";

        }
        echo "
        <section class='section_btn'>
            <form method='post'>
                <input type='hidden' name='index' value='$key'>
                <button class='btn_link' name='print'>Drukuj</button>
            </form>
        </section>
        ";
        echo "<br><br><br>";
    }
?>
