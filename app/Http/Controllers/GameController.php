<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\CardRepositoryInterface;

class GameController extends Controller
{
    private $card;

    public function __construct(CardRepositoryInterface $card)
    {
        $this->card = $card;    
    }

    public function index()
    {
        /**
         * Not the best idea , only used for the assignment !!
         */

        $this->card->resetCards();
        return view('menu', ['cards' => $this->card->getCards()]);
    }

    public function startGame(Request $request)
    {
        return redirect()->route('game')->with([
            'suit' => $request->suit,
            'value' => $request->value
        ]);
    }
    
    public function game()
    {
        return view('game', [
            'suit' => session()->get('suit'),
            'value' => session()->get('value')
        ]);
    }

    public function updateGame(Request $request)
    {
        $status = false;
        $chance = 0;
        
        $card = $this->card->getRandomCard();
        $card->status = true;
        $card->save();

        if ($card->suit == $request->suit && $card->value == $request->value) {
            $status = true;
        }

        $chance = round((1/$this->card->getRemainingCardsCount())*100, 2);

        return response()->json([
            'status' => $status,
            'image' => $card->image,
            'chance' => $chance,
        ], 200);
    }
}
