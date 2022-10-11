<div class="card-body">
    <form action="{{route('home')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image">
        <input type="submit" value="Upload">
    </form>
</div>