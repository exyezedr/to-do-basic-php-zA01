<?php

require_once __DIR__ . "/../model/to-do.php";
require_once __DIR__ . "/../business-logic/show-to-do.php";
require_once __DIR__ . "/../business-logic/add-to-do.php";
require_once __DIR__ . "/../business-logic/remove-to-do.php";

addToDo("a");
addToDo("b");
addToDo("c");
addToDo("d");
addToDo("e");

showToDo();

echo "==================================================\n";

echo json_encode(removeToDo(-1)) . "\n";
echo json_encode(removeToDo(0)) . "\n";
echo json_encode(removeToDo(6)) . "\n";
echo json_encode(removeToDo(3)) . "\n";
echo json_encode(removeToDo(1)) . "\n";
echo json_encode(removeToDo(3)) . "\n";

echo "==================================================\n";

showToDo();
