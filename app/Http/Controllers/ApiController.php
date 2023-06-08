<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function getBook(){
         $books = Book::all()->load('category');
         return $books;  
    }

     public function getBookId($id){
         $book = Book::findOrFail($id);
         return $book;  
    }

    public function deleteBook(Book $book)
    {
        $book->delete();
        return response()->json([
            'message' => 'تم حذف الكتاب بنجاح',
            'state' => '200',
        ]);
    }

public function storeBook(Request $request)
{
    $title = $request->input('title');
    $category_id = 2;
    $author = $request->input('author');
    $release_date = '2020-02-12';
    $description = 'كتاب السلام عليك يا صاحبي';
    $price = $request->input('price');

    $book = new Book;
    $book->title = $title;
    $book->category_id = $category_id;
    $book->author = $author;
    $book->release_date = $release_date;
    $book->description = $description;
    $book->price = $price;

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $book->image = $file->store('/images', 'public');
    }

    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $book->file = $file->store('/files', 'public');
    }

    return $book;
}


   public function updateBook(Request $request, $id)
{
    
        $contacts = Book::findOrFail($id);
    
        $contacts->title = $request->input('title');
        $contacts->category_id = 4;
        $contacts->author = $request->input('author');
        $contacts->release_date = '2020-3-12';
        $contacts->description = 'تعديل الكتاب';
        $contacts->price = 30;
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $contacts->image = $file->store('/images', 'public');
        }

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filePath = $file->store('/files', 'public');
            $contacts->file = $filePath;
        }

        return $contacts;
    
}    
    
  

 
}
