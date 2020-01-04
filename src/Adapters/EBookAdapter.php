<?php

namespace App\Adapters;

use App\Interfaces\BookInterface;
use App\Interfaces\EBookInterface;

/**
 * Class EBookAdapter
 */
class EBookAdapter implements BookInterface
{
    /**
     * @var EBookInterface
     */
    private $eBook;

    /**
     * EBookAdapter constructor.
     *
     * @param EBookInterface $eBook
     */
    public function __construct(EBookInterface $eBook)
    {
        $this->eBook = $eBook;
    }

    /**
     * @inheritdoc
     */
    public function open()
    {
        $this->eBook->unlock();
    }

    /**
     * @inheritdoc
     */
    public function turnPage()
    {
        return $this->eBook->pressNext();
    }

    /**
     * @inheritdoc
     */
    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }
}