<?php

namespace EmployeeManager;


class EmployeeManager
{
    private array $employees;

    public function __construct()
    {
        $this->employees = [];
    }

    public function addEmployee($employee): void
    {
        $this->employees[$employee->getFirstName() . " " . $employee->getLastName()] = $employee;
    }

    public function deleteEmployee(string $fullName)
    {
        unset($this->employees[$fullName]);
    }

    public function getEmployees()
    {
        return $this->employees;
    }
//    public function create($employee)
//    {
//        array_push($this->employees, $employee);
//    }
//
//    public function display()
//    {
//        return $this->employees;
//    }
//
//    public function remove($index)
//    {
//        array_splice($this->employees, $index, 1);
//    }
//
//    public function update($index, $employee)
//    {
//        $this->employees[$index] = $employee;
//    }
}