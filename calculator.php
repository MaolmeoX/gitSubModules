<?php
require_once "./php-add-lib/AddCommand.php";
require_once "./php-multi-lib/MultiCommand.php";
echo "1 Add \n2 Multi \n3 Quit\n";

$choice = trim(fgets(STDIN));

switch ($choice) {
    case 1:
        echo "Le résultat est ".addChoice();
        break;
    case 2:
        echo "Le résultat est ".multiChoice();
        break;
    case 3:
        echo 'Aurevoir';
        break;
    default:
        echo "default";
        break;
}

/**
 * @return int
 */
function addChoice()
{
    $addClass = new AddCommand();
    echo "\nVeuillez saisir un nombre\n";
    $number = trim(fgets(STDIN));
    return $addClass->add($number, $number);
}

/**
 * @return int
 */
function multiChoice()
{
    $multiClass = new MultiCommand();
    echo "\nVeuillez saisir un nombre\n";
    $number = trim(fgets(STDIN));
    return $multiClass->multi($number, $number);
}