<?php

include 'db.php';

foreach ($publication as $item) {
    $item->printItem();
}