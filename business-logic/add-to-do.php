<?php

function addToDo(string $list): void
{
    global $toDo;

    $toDo[] = $list;
}
