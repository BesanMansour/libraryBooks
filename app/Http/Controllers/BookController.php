<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Stub\ReturnStub;
use Symfony\Component\HttpFoundation\Session\Session;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $users = User::all();
    $comps = Book::paginate(3);
    
    return view('admin.create', compact('users', 'comps'));
}



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('admin.add', [
            'categories' => $categories,           
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

public function store(Request $request)
{
    $title = $request->input('title');
    $category_id = $request->input('category_id');
    $author = $request->input('author');
    $release_date = $request->input('release_date');
    $description = $request->input('description');
    $price = $request->input('price');

    $book = new Book;
    $book->title = $title;
    $book->category_id = $category_id;
    $book->image = $request->file('image');
    $book->author = $author;
    $book->release_date = $release_date;
    $book->description = $description;
    $book->price = $price;

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $book['image'] = $file->store('/images', 'public');
    }

    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $filePath = $file->store('/files', 'public');
        $book->file = $filePath;
    }
    
    $book->save();

    return redirect()->route('admin.index')->with('success', 'تمت عملية الإضافة بنجاح');

}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
   public function edit($id)
{
    $contacts = Book::findOrFail($id);
    $categories = Category::all();
    return view('admin.edit', compact('contacts', 'categories'));
}


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */


public function update(Request $request, $id)
{
    try {
        $contacts = Book::findOrFail($id);
    
        $contacts->title = $request->input('title');
        $contacts->category_id = $request->input('category_id');
        $contacts->author = $request->input('author');
        $contacts->release_date = $request->input('release_date');
        $contacts->description = $request->input('description');
        $contacts->price = $request->input('price');
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $contacts->image = $file->store('/images', 'public');
        }

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filePath = $file->store('/files', 'public');
            $contacts->file = $filePath;
        }
        $contacts->save();

            return redirect()->route('admin.index')->with('success','تم تعديل الكتاب بنجاح');
    } catch (\Exception $e) {
        return view('customer.error');
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
      Book::findorFail($id)->delete();
      return redirect()->back()->with('success','تم حذف الكتاب بنجاح');
    }

}

