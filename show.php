<?php
require_once('model/menu/menu.php');
require_once('data/data.php');

$menuName = $_GET['name'];
$menu = Menu::findByName($menus, $menuName);
$menuReviews = $menu->getReviews($reviews);

require_once 'view/show.php';
