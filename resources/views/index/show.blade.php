<x-layout>

    <div class="container bg-primary p-5 border border-primary-subtle rounded">
        <form action="/{{$index->id}}/edit" method="get">
            <h1>ID: {{$index->id}}</h1>
            <h2>Title: {{$index->title}}</h2>
            <h3>Description: {{$index->description}}</h3>
            <a class="btn btn-success" href="/">Back</a>
            <button type="submit" class="btn btn-secondary">Edit</button>
        </form>
    </div>

</x-layout>
