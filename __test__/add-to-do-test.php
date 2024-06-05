<?php

require_once __DIR__ . "/../model/to-do.php";
require_once __DIR__ . "/../business-logic/show-to-do.php";
require_once __DIR__ . "/../business-logic/add-to-do.php";

addToDo("a");
addToDo("b");
addToDo("c");

showToDo();
