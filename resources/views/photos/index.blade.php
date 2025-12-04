<h1>Photo List</h1>

<ul>
    @foreach ($photos as $photo)
    <li>
        <a href="{{ url('photos/' . $photo['id']) }}">
        {{ $photo['title'] }}
    </a>
    </li>
    @endforeach
</ul>