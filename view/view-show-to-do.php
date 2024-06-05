<?php

require_once __DIR__ . "/../business-logic/show-to-do.php";
require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/view-add-to-do.php";
require_once __DIR__ . "/view-remove-to-do.php";

function viewShowToDo(): void
{
    while (true) {
        echo "to do\n";

        showToDo();

        echo "menu\n";
        echo "1. add\n";
        echo "2. remove\n";
        echo "x. exit\n";

        $choose = input("choose");

        switch (strtolower($choose)) {
            case "1":
                viewAddToDo();
                break;
            case "2":
                viewRemoveToDo();
                break;
            case "x":
                echo "\n- see you -\n";
                exit;
            default:
                echo "\n- option not understood -\n\n";
        }
    }
}
