<?php

class Employee
{
    public $employee;
    public $basePay;
    public $hoursWorked;

    public function __construct(string $employee, float $basePay, int $hoursWorked)
    {

        $this->employee = $employee;
        $this->basePay = $basePay;
        $this->hoursWorked = $hoursWorked;
    }

    public function getTotalPay(): string
    {
        if ($this->basePay < 8.00) {
            return "$this->employee: ERROR! Minimum base pay should be at least $8.00 per hour";
        }
        if ($this->hoursWorked > 60) {
            return "$this->employee: ERROR! You cannot work more than 60 hours";
        }
        if ($this->hoursWorked <= 40) {
            $salary = $this->basePay * $this->hoursWorked;
        } else {
            $overtime = ($this->hoursWorked - 40) * ($this->basePay * 1.5);
            $salary = ($this->basePay * 40) + $overtime;

        }
        return "$this->employee: $" . number_format($salary, 2);
    }
}


$employees = [
    new Employee("Employee 1", 7.50, 35),
    new Employee("Employee 2", 8.20, 47),
    new Employee("Employee 3", 10.00, 73),
    new Employee("Employee 4", 13.25, 50)
];

foreach ($employees as $employee) {
    echo $employee->getTotalPay() . PHP_EOL;
}