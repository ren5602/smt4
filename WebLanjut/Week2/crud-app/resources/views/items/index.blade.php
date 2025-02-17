{{-- note --}}
<!DOCTYPE html>
<html>
<head>
    <title>Item List</title>
</head>
<body>
    <h1>Items</h1>
    @if(session('success'))
        <p>{{ session('success') }}</p> {{-- menampilkan pesan sukses --}}
    @endif
    <a href="{{ route('items.create') }}">Add Item</a> {{-- untuk menambahkan item --}}
    <ul>
        @foreach ($items as $item)
            <li>
                {{ $item->name }} - 
                {{-- untuk mengedit item --}}
                <a href="{{ route('items.edit', $item) }}">Edit</a> 

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