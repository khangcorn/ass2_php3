<!-- resources/views/upload.blade.php -->
<form action="{{ route('image.upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="image">Choose Image</label>
        <input type="file" name="image" id="image">
    </div>
    <div>
        <button type="submit">Upload Image</button>
    </div>
</form>
