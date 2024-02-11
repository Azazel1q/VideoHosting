<div class="list3">
    @if ($video)
        @foreach ($video as $videoItem)
        <div class="video-item">
            <a class="video-item__link" href=""></a>
            <video class="video" preload="metadata">
                <source src="/storage/img/{{$videoItem['file']}}">
            </video>
            <div class="video-item__title">{{$videoItem['title']}}</div>
        </div>
        @endforeach
    @endif
</div>
