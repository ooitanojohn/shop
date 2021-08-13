<?php
// リダイレクト
if (empty($_POST)) {
    header('Location:index.php');
}
require_once('data/data.php');
require_once 'view/confirm.php';
