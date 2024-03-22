@extends('layouts.app')

@section('header')
    <title>Dom Group</title>
    <meta name="description" content="DOM GROUP  - сервис, с которым ремонт будет приносить больше пользы и удовольствия. Здесь вы сможете найти дизайнера интерьера, отделочников и мебельщиков.">
@endsection

@section('content')
    <div class="carous">
        <carousel-component style="height: 720px"></carousel-component>
    </div>
    <road-map-component class="w-full lg:w-5/6 lg:mt-14 mx-auto box-border"></road-map-component>
@endsection
