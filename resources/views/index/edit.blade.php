<x-layout>

    <div class="container bg-primary p-5 border border-primary-subtle rounded">
        <form method="POST" action="/{{$index->id}}" enctype="multipart/form-data">
            @csrf
            <label for="id" class="fs-2">ID: </label>
            <input type="text" id="id" name="id" value="{{$index->id}}">
            <br />
            <label for="title" class="fs-2">Title: </label>
            <input type="text" id="title" name="title" value="{{$index->title}}">
            <br />
            <label for="description" class="fs-2">Description: </label>
            <input type="text" id="description" name="description" value="{{$index->description}}">
            <br />

            <a href="/{{$index->id}}" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-danger">Edit</button>
        </form>

    </div>

</x-layout>
