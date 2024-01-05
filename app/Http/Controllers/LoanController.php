<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use App\Models\Book; // Jangan lupa untuk mengimpor model Book

class LoanController extends Controller
{
    public function index()
    {
        $loans = Loan::with('book')->get();
        return view('loans.index', compact('loans'));
    }

    public function create()
    {
        $books = Book::all();
        return view('loans.create', compact('books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required',
            'borrower_name' => 'required',
            'due_date' => 'required',
        ]);

        Loan::create($request->all());

        return redirect()->route('loans.index')->with('success', 'Loan created successfully');
    }

    public function show(Loan $loan)
    {
        return view('loans.show', compact('loan'));
    }

    public function edit(Loan $loan)
    {
        $books = Book::all();
        return view('loans.edit', compact('loan', 'books'));
    }

    public function update(Request $request, Loan $loan)
    {
        $request->validate([
            'book_id' => 'required',
            'borrower_name' => 'required',
            'due_date' => 'required',
        ]);

        $loan->update($request->all());

        return redirect()->route('loans.index')->with('success', 'Loan updated successfully');
    }

    public function destroy(Loan $loan)
    {
        $loan->delete();

        return redirect()->route('loans.index')->with('success', 'Loan deleted successfully');
    }
}
