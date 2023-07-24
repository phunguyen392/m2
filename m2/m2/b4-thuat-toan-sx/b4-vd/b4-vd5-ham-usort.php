<?php
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

// Mảng các đối tượng Person
$people = array(
    new Person("Alice", 25),
    new Person("Bob", 30),
    new Person("Charlie", 20),
    new Person("David", 35)
);

// Hàm so sánh theo thuộc tính age của đối tượng Person
function cmp($a, $b) {
    if ($a->age == $b->age) {
        return 0;
    }
    return ($a->age < $b->age) ? -1 : 1;
}

// Sắp xếp mảng các đối tượng Person
usort($people, "cmp");

// In mảng đã sắp xếp
foreach ($people as $person) {
    echo $person->name . " (" . $person->age . ")\n";
}