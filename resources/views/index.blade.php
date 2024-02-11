@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    <div class="container-lg">
        <div class="page">
            @livewire('menu')
            <div class="page-content">
                <h1>Главная</h1>
                @livewire('video-list')
            </div>
        </div>
    </div>
@endsection