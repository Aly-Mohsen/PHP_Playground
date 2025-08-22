<?php

$_SESSION['name'] = 'Aly';

view("index.view.php", [
    'heading' => 'Home',
]);