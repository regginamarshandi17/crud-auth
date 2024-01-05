<!-- resources/views/books/edit.blade.php -->
@extends('layouts.master')

@section('content')
  <div class="container">
    <h1>Edit Buku</h1>
    <form method="post" action="{{ route('books.update', $book->id) }}">
      @csrf
      @method('put')
      <div class="mb-3">
        <label for="title" class="form-label">Judul Buku:</label>
        <input type="text" class="form-control" name="title" value="{{ $book->title }}" required>
      </div>
      <div class="mb-3">
        <label for="author" class="form-label">Penulis:</label>
        <input type="text" class="form-control" name="author" value="{{ $book->author }}" required>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Deskripsi:</label>
        <textarea class="form-control" name="description" rows="3">{{ $book->description }}</textarea>
      </div>
      <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
  </div>
@endsection
