@extends('layouts.app')

@section('title', 'Добавить видео')

@section('content')
<div class="container-lg">
    <div class="page">
        @livewire('menu')
        <div class="page-content">
            <h1>Добавить видео</h1>
            {{-- @livewire('video-form') --}}
            <form class="video-form" action="{{route('getVideo')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <input name="title" class="input" type="text" placeholder="Название">
                <textarea name="description" class="input" type="text" placeholder="Описание"></textarea>
                <input name="file" accept="video/mp4, video/AVI"  type="file" class="input" placeholder="Выберите видео">
                <input type="submit" value="Добавить">
            </form>
        </div>
    </div>
</div>
@endsection