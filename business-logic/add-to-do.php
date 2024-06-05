<?php

function addToDo(string $task): void
{
    global $toDo;

    $toDo[] = $task;
}
