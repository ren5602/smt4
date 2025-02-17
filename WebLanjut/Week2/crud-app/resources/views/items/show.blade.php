{{-- note --}}
<!DOCTYPE html>
<html>
<head>
    <title>Item List</title>
</head>
<body>
    <h1>Item</h1>
    @if(session('success'))
        {{-- menampilkan pesan sukses --}}
        <p>{{ session('success') }}</p>
    @endif
    {{-- link untuk menambahkan item --}}
    <a href="{{ route('items.create') }}">Add Item</a>
    <ul>
        @foreach ($items as $item)
        <li>
            {{-- menampilkan nama item --}}
            {{ $item->name }}

            {{-- link untuk mengedit item --}}
            <a href="{{ route('items.edit', $item) }}">Edit</a>

            {{-- form untuk menghapus item --}}
            <form action="{{ route('items.destroy', $item) }}" method="POST" style="display:inline;">

                {{-- token untuk validasi form --}}
                @csrf

                {{-- method delete untuk menghapus item --}}
                @method('DELETE')
                
                {{-- tombol untuk menghapus item --}}
                <button type="submit">Delete</button>
            </form>
        </li>
        @endforeach
    </ul>
</body>
</html>