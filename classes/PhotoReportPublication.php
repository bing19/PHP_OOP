<?php

/**
 * Created by PhpStorm.
 * User: davidoff
 * Date: 19.07.17
 * Time: 21:59
 */
class classes_PhotoReportPublication extends classes_Publication
{
    public function printItem()
    {
        echo $this->title . '<br>';
        echo 'Это Фотоотчет' . '<br>';
        echo "<img src=$this->preview>" . '<br>';
        echo '<hr><br>';
    }

}