@extends('layouts.master')

@section('content')
    <div class="row">
        @foreach ($cards as $card)
            <div class="col-md-1 px-0 mb-2">
                <img class="menu-card" src="{{ $card->image }}" data-suit="{{ $card->suit }}" data-value="{{ $card->value }}" />
            </div>
        @endforeach
    </div>
    <div class="row mt-4">
        <div class="col-md-4 offset-md-4 text-center">
            <p>Click the card to select!</p>
            <img id="select-card" src="" />
            <form method="POST" class="d-inline">
                @csrf
                <input type="hidden" name="suit">
                <input type="hidden" name="value">
                <button class="btn btn-info" id="submit-card" type="submit">Choose Card</button>
            </form>
        </div>
    </div>
@endsection