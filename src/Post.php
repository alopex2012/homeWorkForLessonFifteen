<?php

namespace App;

/**
 * Class Post
 * @package App
 */
class Post
{
    /**
     * @var string $name
     */
    private string $name;
    /**
     * @var int $salary
     */
    private int $salary;

    /**
     * Post constructor.
     * @param string $name
     * @param int $salary
     */
    public function __construct(string $name, int $salary)
    {
        $this->name = $name;
        $this->salary = $salary;

    }


    /**
     * Getter for $name
     * @return string $name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Getter for $salary
     * @return int $salary
     */
    public function getSalary(): int
    {
        return $this->salary;
    }
}