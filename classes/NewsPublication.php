<?php

/**
 * Created by PhpStorm.
 * User: davidoff
 * Date: 19.07.17
 * Time: 21:59
 */
class classes_NewsPublication extends classes_Publication
{
    public function printItem()
    {
        echo $this->title . '<br>';
        echo $this->short_content . '<br>';
        echo 'Это новость' . '<br>';
        echo '<hr><br>';
    }

}