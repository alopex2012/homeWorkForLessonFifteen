<?php

namespace App;

class Employee
{
    private $name;
    private $surname;
    private $post;

    public function __construct($name,$surname,Post $post)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->post = $post;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getPost()
    {
        return $this->post;
    }

    public function changePost(Post $post)
    {
        $this->post = $post;
    }
}
