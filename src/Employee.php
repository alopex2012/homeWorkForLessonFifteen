<?php

namespace App;
use App\Post;

/**
 * Class Employee
 * @uses \App\Post
 */
class Employee
{
    /**
     * @var string $name
     */
    private string $name;
    /**
     * @var string $surname
     */
    private string $surname;
    /**
     * @var Post $post
     */
    private  $post;

    /**
     * Employee constructor.
     * @param string $name
     * @param string $surname
     * @param Post $post
     */
    public function __construct(string $name, string $surname, Post $post)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->post = $post;
    }

    /**
     * Setter for $name
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
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
     * Setter for $surname
     * @param string $surname
     */
    public function setSurname(string $surname)
    {
        $this->surname = $surname;
    }

    /**
     * Getter for $surname
     * @return string $surname
     */
    public function getSurname(): string
    {
        return $this->surname;
    }
    /**
     * Getter for $post
     * @return Post $post
     */
    public function getPost(): Post
    {
        return $this->post;
    }

    /**
     * Changes $post for Employee
     * @param Post $post
     * @return void
     */
    public function changePost(Post $post)
    {
        $this->post = $post;
    }
}
