<?php

require_once __DIR__ . "/../business-logic/add-to-do.php";
require_once __DIR__ . "/../business-logic/show-to-do.php";
require_once __DIR__ . "/../view/view-add-to-do.php";

addToDo("a");
addToDo("b");
showToDo();

viewAddToDo();
showToDo();

viewAddToDo();
showToDo();
