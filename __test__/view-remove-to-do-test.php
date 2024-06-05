<?php

require_once __DIR__ . "/../business-logic/add-to-do.php";
require_once __DIR__ . "/../business-logic/show-to-do.php";
require_once __DIR__ . "/../view/view-remove-to-do.php";

addToDo("a");
addToDo("b");
addToDo("c");
addToDo("d");
addToDo("e");
showToDo();

viewRemoveToDo();
showToDo();

viewRemoveToDo();
showToDo();

viewRemoveToDo();
showToDo();
