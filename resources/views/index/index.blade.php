<x-layout class="d-flex justify-content-center align-items-center flex-column">
    @include('partials._search')

    <div class="container bg-white p-5 border border-primary-subtle rounded">
        <h1 class="fs-1" id="title">FoodTap</h1>
        <h2 class="fs-2">FoodTap is a food blog that provides you with the best recipes from around the world.</h2>
    </div>

    <div class="container bg-white p-5 border border-primary-subtle rounded">
        {{--<h1>Hello World!</h1>--}}
        {{--@dd ($indexs)--}}
        @foreach ($indexs as $index)
        <x-card>
            <form action="/{{$index['id']}}">
                <h1 class="fs-2">{{ $index['title'] }}</h1>
                <h2 class="fs-3">{{ $index['description'] }}</h1>
                    <button type="submit" class="btn btn-secondary">Read More</button>
            </form>
        </x-card>
        @endforeach
        <div class="mt-6 p-4">
            {{ $indexs->links('pagination::bootstrap-5') }}
        </div>
    </div>

</x-layout>
