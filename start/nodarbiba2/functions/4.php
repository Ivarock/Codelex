<?php

require './3.php';

$users = [
    new Person('Ivars', 'Sluka', 31),
    new Person('Andrew', 'Kennedy', 39),
    new Person('Sally', 'Kennedy', 17),
    new Person('John', 'Bravo', 18),
    new Person('Donald', 'Obama', 101),

];
foreach ($users as $user) {
    echo $user->name . ' ' . $user->surname . ' ' . $user->legalAge();
}
