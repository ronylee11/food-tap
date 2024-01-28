<x-layout>

    <div class="container bg-white p-5 border border-primary-subtle rounded">
        <h1>ID: {{$index->id}}</h1>
        <h2>Title: {{$index->title}}</h2>
        <h3>Description: {{$index->description}}</h3>

        <div class="d-flex">
            <a class="btn btn-success m-2" href="/">Back</a>
            <a class="btn btn-secondary m-2" href="/{{$index->id}}/edit">Edit</a>
            <form action="/{{$index->id}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger m-2">Delete</button>
            </form>
        </div>
    </div>

</x-layout>
