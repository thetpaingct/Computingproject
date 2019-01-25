<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Genre;
use App\Models\Book;
use App\Models\Publishinghouse;
use App\library\File_upload;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $result ['books'] = Book::with('genre','author','publishinghouse')->get()->toArray();
          // dd( $result);
        return view('book.list',$result);
        
    }

    public function detail($id){
         $result ['books'] = Book::where('id',$id)->with('genre','author','publishinghouse')->get()->toArray();
         // dd($result);
         // $result ['books'] = Book::where('id',$id)->first()->toArray();
        // dd($result);
        return view('book.detail',$result);
    }

    public function homeview(){
         $result ['books'] = Book::get()->toArray();
          $result ['authors'] = Author::get()->toArray();
           $result ['genre'] = Genre::get()->toArray();
            $result ['publishinghouse'] = Publishinghouse::get()->toArray();

         // dd($result);
         // $result ['books'] = Book::where('id',$id)->first()->toArray();
        // dd($result);
        return view('home.index',$result);
            // return js;
    }
     public function authorsearch($id)
    {
        //
          $result ['books'] = Book::where('id',$id)->with('author')->get()->toArray();
           $result ['authors'] = Author::get()->toArray();
           $result ['genre'] = Genre::get()->toArray();
            $result ['publishinghouse'] = Publishinghouse::get()->toArray();
          // dd( $result);
        return view('home.categories',$result);
        
    }
 public function genresearch($id)
    {
        //
          $result ['books'] = Book::where('id',$id)->with('genre')->get()->toArray();
           $result ['authors'] = Author::get()->toArray();
           $result ['genre'] = Genre::get()->toArray();
            $result ['publishinghouse'] = Publishinghouse::get()->toArray();
          // dd( $result);
        return view('home.categories',$result);
        
    }
     public function publishinghousesearch($id)
    {
        //
          $result ['books'] = Book::where('id',$id)->with('publishinghouse')->get()->toArray();
           $result ['authors'] = Author::get()->toArray();
           $result ['genre'] = Genre::get()->toArray();
            $result ['publishinghouse'] = Publishinghouse::get()->toArray();
          // dd( $result);
        return view('home.categories',$result);
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $result ['books'] = Book::get()->toArray();
        $result ['authors'] = Author::get()->toArray();
        $result ['genres'] = Genre::get()->toArray();
        $result ['publishinghouse'] = Publishinghouse::get()->toArray();
          return view('book.create',$result);
        // return "hello";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $file_upload = new File_upload();
        $imageName = $file_upload->image_upload('image');
        $pdfName = $file_upload->pdf_upload('pdf');

        // dd($imageName);

        $book = new Book();
        $book->codenumber = $request->input('codenumber');
        $book->name = $request->input('bookname');
        $book->edition = $request->input('edition');
        $book->author_id = $request->input('authorid');
        $book->genre_id =$request->input('genrename');
         $book->publishinghouse_id =$request->input('publishinghouse');
        $book->description =$request->input('description');
        $book->image = $imageName;
        $book->save_pdf = $pdfName;
        $book->save();
          
           return redirect('book');


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
         $result ['book'] = Book::where('id',$id)->first()->toArray();
        // dd($result);
       

         // $result ['books'] = Book::get()->toArray();
        $result ['authors'] = Author::get()->toArray();
        $result ['genres'] = Genre::get()->toArray();
        $result ['publishinghouse'] = Publishinghouse::get()->toArray();
          // return view('book.create',$result);
         return view('book.update',$result);
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
        // dd($id);
         $file_upload = new File_upload();
        $imageName = $file_upload->image_upload('image');
        $pdfName = $file_upload->pdf_upload('pdf');
        
          $book = Book::where('id',$id)->first();
          $book->codenumber = $request->input('codenumber');
        $book->name = $request->input('bookname');
        $book->edition = $request->input('edition');
        $book->author_id = $request->input('authorid');
        $book->genre_id =$request->input('genrename');
        $book->publishinghouse_id =$request->input('publishinghouse');
        $book->description =$request->input('description');
        $book->image = $imageName;
        $book->save_pdf = $pdfName;
        $book->save();
        return redirect('book');
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
