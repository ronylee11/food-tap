<x-layout>
    <div class="container bg-primary p-5 border border-primary-subtle rounded">
        {{--<h1>Hello World!</h1>--}}
        {{--@dd ($indexs)--}}
        @foreach ($indexs as $index)
        <h1>{{ $index['title'] }}</h1>
        <h2>{{ $index['description'] }}</h1>
            @endforeach
    </div>

</x-layout>
