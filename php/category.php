<?php

require 'autoload.php';
require 'core.php';

$logs = new Logs();

$limit = (isset($_GET["limit"])) ? $_GET["limit"] : false;

$catId = $_GET["id"];

try {
  $show = new ShowJson();
  $show->showCategory($catId, $limit);

} catch (\Throwable $th) {
  $logs->log($th);
}