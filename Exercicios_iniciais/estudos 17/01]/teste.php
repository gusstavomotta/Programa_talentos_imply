<?php

$myfile = fopen("webdict.txt", "r");

while (!feof($myfile)) {
    echo fgetc($myfile);
}
