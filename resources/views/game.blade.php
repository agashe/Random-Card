@extends('layouts.master')

@section('content')
    <div class="row my-5">
        <div class="col-md-6 text-right">
            <img src="{{ asset('images/card_back.jpg') }}" id="draw-card" />
        </div>
        <div class="col-md-6">
            <img src="" id="preview-card" />
        </div>
    </div>
    <p class="text-center">Click the card to Draw!</p>

    <div class="row my-5">
        <div class="col-md-4 offset-md-4 text-center">
            <meta name="csrf-token" content="{{ csrf_token() }}" />
            <input type="hidden" name="suit" value="{{ $suit }}">
            <input type="hidden" name="value" value="{{ $value }}">
            <div class="alert alert-info">
                Chance: <span id="chance">0</span>%
            </div>
        </div>
    </div>
    
    <div class="row my-5">
        <div class="col-md-4 offset-md-4 text-center">
            <div class="alert alert-success d-none" id="win">
                <h4></h4>
            </div>
        </div>
    </div>
@endsection