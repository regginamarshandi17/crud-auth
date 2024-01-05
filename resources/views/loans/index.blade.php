<!-- resources/views/loans/index.blade.php -->
@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Daftar Peminjaman</h1>

        <a href="{{ route('loans.create') }}" class="btn btn-primary mb-3">Tambah Peminjaman Baru</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Buku</th>
                    <th>Peminjam</th>
                    <th>Tanggal Jatuh Tempo</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($loans as $loan)
                    <tr>
                        <td>{{ $loan->id }}</td>
                        <td>{{ $loan->book->title }}</td>
                        <td>{{ $loan->borrower_name }}</td>
                        <td>{{ $loan->due_date }}</td>
                        <td>
                            <a href="{{ route('loans.show', $loan->id) }}" class="btn btn-info">Lihat</a>
                            <a href="{{ route('loans.edit', $loan->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('loans.destroy', $loan->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
