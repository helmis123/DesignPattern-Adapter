<?php

namespace App\Interfaces;

/**
 * Interface BookInterface
 */
interface BookInterface
{
    /**
     * Open the book.
     */
    public function open();

    /**
     * Turn the page.
     */
    public function turnPage();

    /**
     * Get the page number.
     *
     * @return int
     */
    public function getPage(): int;
}
