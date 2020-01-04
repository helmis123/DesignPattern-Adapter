<?php


namespace App\Interfaces;

/**
 * Interface EBookInterface
 */
interface EBookInterface
{
    /**
     * Unlock the ebook.
     */
    public function unlock();

    /**
     * Go to the next page.
     */
    public function pressNext();

    /**
     * Returns current page and total number of pages, like [10, 100] is page 10 of 100.
     *
     * @return int[]
     */
    public function getPage(): array;
}