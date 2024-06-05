<?php

require_once __DIR__ . "/../model/to-do.php";
require_once __DIR__ . "/../business-logic/show-to-do.php";

showToDo();

$toDo[] = "a";
$toDo[] = "b";
$toDo[] = "c";

showToDo();
