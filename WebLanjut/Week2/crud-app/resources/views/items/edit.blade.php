{{-- note --}}
<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title>
</head>
<body>
    <h1>Edit Item</h1>
    {{-- Membuat form untuk mengedit item yang dipilih --}}
    <form action="{{ route('items.update', $item) }}" method="POST">
        {{-- untuk keamanan form --}}
        @csrf
        
        {{-- Method PUT untuk mengupdate item --}}
        @method('PUT')

        {{-- untuk nama item --}}
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $item->name }}" required>
        <br>

        {{-- untuk deskripsi item --}}
        <label for="description">Description:</label>
        <textarea name="description" required>{{ $item->description }}</textarea>
        <br>

        {{-- submit form --}}
        <button type="submit">Update Item</button>
    </form>

    {{-- Link kembali ke daftar item --}}
    <a href="{{ route('items.index') }}">Back to List</a>
</body>
</html>