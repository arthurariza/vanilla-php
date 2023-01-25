<?php

require_once "utils/functions.php";

// require_once "router.php";

require_once "Database.php";

$db = new Database();

$posts = $db->query("select * from posts;")->fetchAll(PDO::FETCH_ASSOC);

dd($posts);
 