<!-- resources/views/loans/create.blade.php -->
@extends('layouts.master')

@section('content')
    <h1>Tambah Peminjaman Baru</h1>
    
    <form method="POST" action="{{ route('loans.store') }}">
        @csrf

        <div class="mb-3">
            <label for="book_id" class="form-label">Buku</label>
            <select class="form-select" id="book_id" name="book_id" required>
                @foreach($books as $book)
                    <option value="{{ $book->id }}">{{ $book->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="borrower_name" class="form-label">Nama Peminjam</label>
            <input type="text" class="form-control" id="borrower_name" name="borrower_name" required>
        </div>

        <div class="mb-3">
            <label for="due_date" class="form-label">Tanggal Jatuh Tempo</label>
            <input type="date" class="form-control" id="due_date" name="due_date" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
