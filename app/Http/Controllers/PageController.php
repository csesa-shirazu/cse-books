<?php

namespace App\Http\Controllers;
use App\Book;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;



class PageController extends Controller
{

    public function getHome(){
        $books = Book::orderBy('id','desc')->paginate(16); // desc = descending
        return view ('pages.home',['books' => $books]);
    }

    public function getEkhtesasi(){
        $books = Book::where('category_id', '=', 1)->orderBy('id','desc')->paginate(16);
        $pageName = "کتاب های اختصاصی";
        return view('pages.showPostByCategory', ['books' => $books , 'pageName' => $pageName]);
    }

    public function GetUmumi(){
        $books = Book::where('category_id', '=', 2)->orderBy('id','desc')->paginate(16);
        $pageName = "کتاب های عمومی";
        return view('pages.showPostByCategory', ['books' => $books , 'pageName' => $pageName]);
    }

    public function getSingleBook($slug){
        $book = Book::where('slug', '=', $slug)->first();
        return view('pages.singlebook', ['book' => $book]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        //
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
        $book = Book::find($id);
        // 2. Update DB
        if($book->availability == 0 && $book->current_reader == $request->current_reader){
            $book->current_reader = 0;
            $book->availability = 1;
            $book->save();
            return redirect()->route('pages.singlebook' , $book->id )->with('status', 'کتاب با موفقیت برگشت داده شد!');
            
        }
        else if ($book->availability == 1){
            $book->current_reader = $request->current_reader;
            $book->availability = 0;
            $book->save();
            return redirect()->route('pages.singlebook' , $book->id )->with('status', 'کتاب به نام شما ثبت شد!');
        }
        else{
            $book->save();
            return redirect()->route('pages.singlebook' , $book->id )->with('status', 'شما دارنده این کتاب نیستید!');
        }
        
        
    
        
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
}
