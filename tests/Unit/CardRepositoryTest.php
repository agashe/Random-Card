<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Repository\CardRepository;

class CardRepositoryTest extends TestCase
{
    public function testCards()
    {
        $card = new CardRepository();

        $card->resetCards();
        $this->assertEquals(52, $card->getRemainingCardsCount());
        $this->assertTrue(!empty($card->getCards()));
    }
}
