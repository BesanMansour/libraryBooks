<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Probability;
use App\Models\UserBook;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
{
    $homes = Book::latest()->take(3)->get();
    $topBooks = UserBook::orderBy('number_books', 'desc')->take(3)->get();
    
    return view('customer.home', compact('homes','topBooks'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $books = Book::paginate(6); 
        return view('customer.show_book',compact('books'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

public function store(Request $request)
{
    if (Auth::check()) {
        $user_id = Auth::id();
    } else {
        return redirect()->route('login');
    }
    
    $book_id = $request->book_id;
    $title = $request->title;
    $number_books = $request->number_books;
    
    $existingRecord = UserBook::where('user_id', $user_id)->where('book_id', $book_id)->first();
    
    if ($existingRecord) {
        $existingRecord->number_books += $number_books;
        $existingRecord->save();
    } else {
        $record = new UserBook();
        $record->user_id = $user_id;
        $record->book_id = $book_id;
        $record->title = $title;
        $record->number_books = $number_books;
        $record->save();
    }
    
    $book = Book::find($book_id);
    
    if (!$book) {
        return view('customer.error');
    }
    
    $book_price = $book->price;
    
    $user = User::find($user_id);
    
    if (!$user) {
        return view('customer.error');
    }
    
    $price = $number_books * $book_price;
    $new_budget = $user->budget - $price;
    
    if ($new_budget < 0) {
        return view('customer.error');
    }
    
    $user->budget = $new_budget;
    $user->save();

    // تنزيل الملف على الجهاز
    $filePath = public_path('storage/' . $book->file);

// استعلام للحصول على أسماء الكتب وفقًا لعدد الكتب الموجود في جدول user_book
$purchasedBooks = UserBook::groupBy('title')
    ->orderByRaw('SUM(number_books) DESC')
    ->pluck('title')
    ->toArray();



    if (file_exists($filePath)) {
        return response()->download($filePath);
    } else {
        return response()->json(['message' => 'الملف غير موجود.']);
    }

}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
        $details = Book::findorFail($id);
        $filePath = public_path('storage/' . $details->file);

    if (file_exists($filePath)) {
        return view('customer.details',compact('details'));
        return response()->download($filePath);
    } else {
        return response()->json(['message' => 'الملف غير موجود.']);
    }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

 public function search(Request $request)
{
    $searchTerm = $request->input('search');
    $books = Book::where('title', 'like', "%$searchTerm%")->paginate(6);
    
    if ($books->isEmpty()) {
        return view('customer.no_results');
    }
    
    return view('customer.result', compact('books'));
}


    public function contact()
{

    return view('customer.contact');
}



}
