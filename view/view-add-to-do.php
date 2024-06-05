<?php

require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../business-logic/add-to-do.php";

function viewAddToDo(): void
{
    echo "\n- add -\n";
    $toDo = input("to do (press 'x' to cancel)");
    echo "\n";

    if (strtolower($toDo) === "x") {
        echo "- cancel add -\n\n";
    } else {
        addToDo($toDo);
    }
}
