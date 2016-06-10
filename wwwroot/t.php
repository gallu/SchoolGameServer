<?php

require_once('db_handle_get.inc');
$dbh = db_handle_get();

$res = $dbh->query("SHOW VARIABLES LIKE '%time_zone%';");
var_dump($res->fetch());
