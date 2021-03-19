<?php

class Student
{
    private int $studentID;
    private string $firstName;
    private string $lastName;
    private string $email;


    public function __construct(int $studentID, string $firstName, string $lastName, string $email)
    {
        $this->studentID = $studentID;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function getStudentID(): int
    {
        return $this->studentID;
    }


    public function getFirstName(): string
    {
        return $this->firstName;
    }


    public function getLastName(): string
    {
        return $this->lastName;
    }


    public function getEmail(): string
    {
        return $this->email;
    }



}








