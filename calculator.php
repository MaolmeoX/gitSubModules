<?php
echo "1 Add \n2 Multi \n3 Quit";

$choice = trim(fgets(STDIN));

switch ($choice) {
    case 1:
        echo 'bobby';
        break;
    case 2:
        echo 'bobby';
        break;
    case 3:
        echo 'Aurevoir';
        break;
    default:
        echo "default";
}