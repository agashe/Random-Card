<?php

namespace App\Repository;

use App\Repository\CardRepositoryInterface;
use App\Models\Card;

class CardRepository implements CardRepositoryInterface
{
    public function resetCards()
    {
        Card::query()->update(['status' => false]);    
    }
    
    public function getCards($id = null)
    {
        return (empty($id))? Card::all() : Card::find($id);        
    }

    public function getRandomCard()
    {
        return Card::where('status', false)->inRandomOrder()->first();        
    }

    public function getRemainingCardsCount()
    {
        return Card::where('status', false)->count();        
    }
}
