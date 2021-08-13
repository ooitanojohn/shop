<?php

require_once('model/menu.php');

$juice = new Menu('JUICE', 600, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png');
$coffee = new Menu('COFFEE', 500, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png');
$curry = new Menu('CURRY', 900, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png');
$pasta = new Menu('PASTA', 1200, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png');

// $juiceに対して数値の2を引数としてsetOrderCountメソッドを呼び出してください
$juice->setOrderCount(2);
// 配列の中に上記の4つのインスタンスを順に入れて、変数$menusに代入してください
$menus = [$juice, $coffee, $curry, $pasta];
