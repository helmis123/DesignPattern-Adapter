<?php


namespace App\Classes;


use App\Interfaces\EBookInterface;

/**
 * Class EBook
 */
class EBook implements EBookInterface
{
    /**
     * @var int
     */
    private $page = 1;

    /**
     * @var int
     */
    private $totalPages = 100;

    /**
     * @inheritdoc
     */
    public function unlock()
    {
    }

    /**
     * @inheritdoc
     */
    public function pressNext()
    {
        return ++$this->page;
    }

    /**
     * @inheritdoc
     */
    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}