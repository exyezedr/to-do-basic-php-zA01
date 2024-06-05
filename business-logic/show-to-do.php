<?php

function showToDo(): void
{
    global $toDo;

    if ($toDo) {
        foreach ($toDo as $number => $toDo) {
            echo $number + 1 . ". $toDo\n";
        }
    } else {
        echo "- empty -\n";
    }
}
