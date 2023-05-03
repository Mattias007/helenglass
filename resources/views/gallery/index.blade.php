

@foreach ($categories as $category)
    <h2>{{ $category->name }}</h2>

    <div class="gallery">
        @foreach ($category->galleryImages as $image)
            <img src="{{ asset('storage/images/' . $image->filename) }}" alt="{{ $image->filename }}">
            {{ asset('storage/images/' . $image->filename) }}
        @endforeach
    </div>
@endforeach

