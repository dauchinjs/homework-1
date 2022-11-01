<?php

function salary($basePay, $hoursWorked) {
    $getsPaid = new stdClass();
    $getsPaid->basePay = $basePay;
    $getsPaid->hoursWorked = $hoursWorked;

    $basicSalary = $hoursWorked * $basePay; // if hours < 40
    $overtimeSalary = $basicSalary + ($hoursWorked - 40) * $basePay * 1.5; // if hours > 40

    if($getsPaid->basePay < 8.00) {
        echo "ERROR";
        echo PHP_EOL;
    } else if ($getsPaid->hoursWorked > 60) {
        echo "ERROR";
        echo PHP_EOL;
    } else if ($getsPaid->hoursWorked < 40) {
        echo "Your salary is $basicSalary USD";
        echo PHP_EOL;
    } else if ($getsPaid->hoursWorked > 40 && $getsPaid->hoursWorked < 60) {
        echo "Your salary is $overtimeSalary USD";
        echo PHP_EOL;
    } else {
        echo "Something went wrong";
    }
}


function employee($employee, $basePay, $hoursWorked) {
    $worker = new stdClass();
    $worker->employee = $employee;
    $worker->basePay = $basePay;
    $worker->hoursWorked = $hoursWorked;
    salary($basePay, $hoursWorked);
    return $worker;
}

$person = [
    employee('employee1', 7.50, 35),
    employee('employee2', 8.20, 47),
    employee('employee3', 10.00, 73)
];
