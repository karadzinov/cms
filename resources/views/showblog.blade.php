@foreach($blog as $blog)
    {{ $blog->title }}

    <img src="/assets/img/blog/{{ $blog->image }}" alt="{{ $blog->title }}"/>
@endforeach