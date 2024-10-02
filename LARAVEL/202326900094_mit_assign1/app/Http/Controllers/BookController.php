<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
{
    $books = Book::all();
    return view('books.index', compact('books'));
}



    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('books.create');
}


    /**
     * Store a newly created resource in storage.
     */
    
public function store(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'year_published' => 'required|integer',
        'description' => 'nullable|string',
    ]);

    // Insert the book into the database
    Book::create($validatedData);

    // Redirect to the index page or wherever you'd like
    return redirect()->route('books.index')->with('success', 'Book added successfully!');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}