<?php
namespace MyApp;

class Student {
    private string $name;

    private string $regNo;

    public function __construct(string $name, string $regNo)
    {
        $this->name = $name;
        $this->regNo = $regNo;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getRegistrationNo(): string
    {
        return $this->regNo;
    }
}
?>