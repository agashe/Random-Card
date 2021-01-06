<?php

namespace App\Repository;

interface CardRepositoryInterface
{
    /**
     * Reset cards status.
     * 
     * @return void
     */
    public function resetCards();
    public function getCards($id);
    public function getRandomCard();
}