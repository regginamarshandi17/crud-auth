<!-- resources/views/books/create.blade.php -->
@extends('layouts.master')

@section('content')
  <div class="container">
    <h1>Tambah Buku</h1>
    <form method="post" action="{{ route('books.store') }}">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Judul Buku:</label>
        <input type="text" class="form-control" name="title" required>
      </div>
      <div class="mb-3">
        <label for="author" class="form-label">Penulis:</label>
        <input type="text" class="form-control" name="author" required>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Deskripsi:</label>
        <textarea class="form-control" name="description" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Tambah Buku</button>
    </form>
  </div>
@endsection
