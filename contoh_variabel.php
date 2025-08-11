<?php

$name = "Saefulloh Maslul";
$age = 25;
$isStudent = true;
$hobbies = ["coding", "reading", "travel"];
$address = [
    "city" => "Bandung",
    "province" => "Jawa Barat",
    "country" => "Indonesia"
];
define("PI", 3.14);

echo "Name: $name\n";
echo "Age: $age\n";
echo "Is Student: " . ($isStudent ? "Yes" : "No") . "\n";
echo "Hobbies: " . implode(", ", $hobbies) . "\n";
echo "Address: " . $address["city"] . ", " . $address["province"] . ", " . $address["country"] . "\n";
echo "PI: " . PI . "\n";

if ($age >= 18) {
    echo "You are an adult\n";
} else {
    echo "You are a minor\n";
}

// for ($i = 0; $i < 5; $i++) {
//     echo "Number: $i\n";
// }

$i = 5;
while ($i < 5) {
    echo "While: Number: $i\n";
    $i++;
}

$i = 5;
do {
    echo "Do-While: Number: $i\n";
    $i++;
} while ($i < 5);

$students = array(
    "Saefulloh",
    "Arya",
    "Rama",
    "Alif"
);

echo "Students: " . implode(", ", $students) . "\n";

$studentSubmissions = array(
    array(
        "name" => "Saefulloh",
        "value" => 70
    ),
    array(
        "name" => "Arya",
        "value" => 80
    ),
    array(
        "name" => "Rama",
        "value" => 90
    ),
    array(
        "name" => "Alif",
        "value" => 100
    )
);



function printStudentSubmission($submission) {
    echo "Student: " . $submission["name"] . ", Value: " . $submission["value"] . "\n";
}


foreach ($studentSubmissions as $submission) {
    printStudentSubmission($submission);
}

?>