<?php

$header = "Home";

require_once "Database.php";

$dbConfig = require "config.php";

$db = new Database($dbConfig['database'], $dbConfig['database']['username'], $dbConfig['database']['password']);

$posts = $db->query("select * from posts;")->fetchAll();

require "./views/index.view.php";
