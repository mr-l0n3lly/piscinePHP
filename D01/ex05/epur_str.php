#!/usr/bin/php

<?php

if($argc >= 1)
{
    $str = $argv[1];

    $str = str_replace('\t', '', $str);
    $str = str_replace('\r', '', $str);

    $a = "";

    $str = trim($str);


    for($i = 0; $i < strlen($str); $i++)
    {
        if($str[$i] != ' ')
        {
            $a .= $str[$i];
        }
        else
        {
            while($str[$i] && $str[$i] == ' ')
                $i++;
            $i--;

            $a .= ' ';
        }
    }

    echo $a."\n";
}
?>
