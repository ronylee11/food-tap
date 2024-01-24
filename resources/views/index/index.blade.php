<x-layout>
    <div class="container bg-primary p-5 border border-primary-subtle rounded">
        {{--<h1>Hello World!</h1>--}}
        {{--@dd ($indexs)--}}
        @foreach ($indexs as $index)
        <div class="border m-2">
            <form action="/{{$index['id']}}">
                <h1>{{ $index['title'] }}</h1>
                <h2>{{ $index['description'] }}</h1>
                    <button type="submit" class="btn btn-primary">Read More</button>
            </form>
        </div>
        @endforeach
    </div>

</x-layout>
