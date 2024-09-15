<?php

    // INCLUDING EMPLOYEE CLASS
    require_once "Classes/Employee.class.php";

    // INSTANTIATE CLASS
    $employee = new Employee("Mahmud", 55000);

    // GETTING EMPLOYEE NAME
    echo $employee->getName();

    // SETTING EMPLOYEE NAME
    $employee->setName("Nahid");

    // GETTING EMPLOYEE SALARY
    echo $employee->getSalary();

    // SETTING EMPLOYEE SALARY
    $employee->setSalary(72000);