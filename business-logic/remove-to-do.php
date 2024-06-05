<?php

function removeToDo(int $number): bool
{
    global $toDo;

    if ($number > count($toDo) || $number < 1) {
        return false;
    }

    array_splice($toDo, $number - 1, 1);

    return true;
}
