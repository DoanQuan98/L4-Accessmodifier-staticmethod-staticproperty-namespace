<?php
include_once "Employee/Employee.php";
include_once "EmployeeManager/EmployeeManager.php";

$employerManager = new EmployeeManager\EmployeeManager();

$employer1 = new Employee\Employee('Doan','Quan','13/7/1998','Viet Tri','HS');
$employerManager->addEmployee($employer1);
$employer2 = new Employee\Employee('Do','Ninh','10/6/1998','Phu Ninh','HS');
$employerManager->addEmployee($employer2);
$employer3 = new Employee\Employee('Do','Kien','15/7/1998','Vinh Phuc','HS');
$employerManager->addEmployee($employer3);
$employerManager->deleteEmployee('Do Ninh');
$employer = $employerManager->getEmployees();

foreach ($employer as $item) {
    echo $item->getLastName() . ' ' . $item->getFirstName() . '<br>';
}