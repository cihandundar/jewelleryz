<title>{{ $title }}</title>
<h1>{{ $searchKey }}</h1>

<ul>
    @foreach ($postTypes as $postType)
        <li>
            {{ $postType->title }}
                <ul>
                        @foreach($postType->posts as $post)
                            <li>
                                    {{ $post->get('title') }}
                            </li>
                        @endforeach
                </ul>
        </li>
    @endforeach
</ul>
