<div class="container">
    @foreach ($files as $file)
        @if (Str::after($file->src, '.') == 'jpg' || Str::after($file->src, '.') == 'png')
            <p>{{$file->src}}</p>
        @else
            <p class="text-danger">{{$file->src}}</p>
        @endif
    @endforeach
</div>