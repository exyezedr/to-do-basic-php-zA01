<?php

function showToDo(): void
{
    global $toDo;

    if ($toDo) {
        foreach ($toDo as $number => $task) {
            echo $number + 1 . ". $task\n";
        }
    } else {
        echo "- empty -\n";
    }
}
