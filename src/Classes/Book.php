<?php


namespace App\Classes;



use App\Interfaces\BookInterface;

/**
 * Class Book
 */
class Book implements BookInterface
{
    /**
     * @var int
     */
    private $page;

    /**
     * @inheritdoc
     */
    public function open()
    {
        $this->page = 1;
    }

    /**
     * @inheritdoc
     */
    public function turnPage()
    {
       return ++$this->page;
    }

    /**
     * @inheritdoc
     */
    public function getPage(): int
    {
        return $this->page;
    }
}