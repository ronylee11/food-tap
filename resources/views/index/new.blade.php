<x-layout>

    <div class="container bg-primary p-5 border border-primary-subtle rounded">
        <form method="POST" action="/" enctype="multipart/form-data">
            @csrf
            <label for="title" class="fs-2">Title: </label>
            <input type="text" id="title" name="title" value="">
            <br />
            <label for="description" class="fs-2">Description: </label>
            <input type="text" id="description" name="description" value="">
            <br />

            <a href="/" class="btn btn-success">Back</a>
            <button type="submit" class="btn btn-warning">Create</button>
        </form>

    </div>

</x-layout>
