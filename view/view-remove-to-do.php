<?php

require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../business-logic/remove-to-do.php";

function viewRemoveToDo(): void
{
    echo "\n- remove -\n";
    $choice = input("number (press 'x' to cancel)");
    echo "\n";

    if (strtolower($choice) === "x") {
        echo "- cancel remove -\n\n";
    } else if ((int)$choice || $choice === "0") {
        $success = removeToDo($choice);
        echo "- " . ($success ? "successfully" : "failed") . " remove to do number $choice -\n\n";
    } else {
        echo "- option not understood -\n\n";
    }
}
