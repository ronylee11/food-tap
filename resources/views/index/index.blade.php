<x-layout>
    <div class="container bg-primary p-5 border border-primary-subtle rounded">
        {{--<h1>Hello World!</h1>--}}
        {{--@dd ($indexs)--}}
        @foreach ($indexs as $index)
        <x-card>
            <form action="/{{$index['id']}}">
                <h1>{{ $index['title'] }}</h1>
                <h2>{{ $index['description'] }}</h1>
                    <button type="submit" class="btn btn-secondary">Read More</button>
            </form>
        </x-card>
        @endforeach
    </div>

</x-layout>
