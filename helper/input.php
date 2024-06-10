<?php

function input(string $sentence): string
{
    echo "$sentence = ";
    return trim(fgets(STDIN));
}
