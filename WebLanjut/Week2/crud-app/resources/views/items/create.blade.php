{{-- note --}}
<!DOCTYPE html>
<html>
<head>
    <title>Add Item</title>
</head>
<body>
    <h1>Add Item</h1>
    {{-- Form untuk menambahkan item baru --}}
    <form action="{{ route('items.store') }}" method="POST">
        {{-- Token CSRF untuk keamanan form --}}
        @csrf 

        {{-- Input untuk nama item --}}
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <br>
        
        {{-- Input untuk deskripsi item --}}
        <label for="description">Description:</label>
        <textarea name="description" required></textarea>
        <br>
        
        {{-- Tombol untuk submit form --}}
        <button type="submit">Add Item</button>
    </form>
    
    {{-- Link kembali ke daftar item --}}
    <a href="{{ route('items.index') }}">Back to List</a>
</body>
</html>