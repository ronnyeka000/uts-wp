<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book as BookModel;
use App\Models\Publisher as PublisherModel;
use App\Models\Category as CategoryModel;
use App\Models\BookCategory as BookCategoryModel;

class BookController extends Controller
{
    public function home(){
        $bukumodel = BookModel::all();
        $kategori = CategoryModel::all();
        $publishers = PublisherModel::all();
        $bookcategorys = BookCategoryModel::all();

        return view('home',[
            'book'=>$bukumodel,
            'category'=>$kategori,
            'publisher'=>$publishers,
            'bookcategory'=> $bookcategorys,
            'title'=>'Home'
            ]);
    }

    public function publisher(){
        $bukumodel = BookModel::all();
        $kategori = CategoryModel::all();
        $publishers = PublisherModel::all();
        $bookcategorys = BookCategoryModel::all();

        return view('publisher',[
            'book'=>$bukumodel,
            'category'=>$kategori,
            'publisher'=>$publishers,
            'bookcategory'=> $bookcategorys,
            'title'=>'Publisher'
        ]);
    }

    public function contact(){
        $bukumodel = BookModel::all();
        $kategori = CategoryModel::all();
        $publishers = PublisherModel::all();
        $bookcategorys = BookCategoryModel::all();

        return view('contact',[
            'book'=>$bukumodel,
            'category'=>$kategori,
            'publisher'=>$publishers,
            'bookcategory'=> $bookcategorys,
            'title'=>'Contact'
        ]);
    }

    public function fantasy(){
        $bukumodel = BookModel::all();
        $kategori = CategoryModel::all();
        $publishers = PublisherModel::all();
        $bookcategorys = BookCategoryModel::all();

        return view('fantasy',[
            'book'=>$bukumodel,
            'category'=>$kategori,
            'publisher'=>$publishers,
            'bookcategory'=> $bookcategorys,
            'title'=>'Fantasy'
        ]);
    }

    public function comedy(){
        $bukumodel = BookModel::all();
        $kategori = CategoryModel::all();
        $publishers = PublisherModel::all();
        $bookcategorys = BookCategoryModel::all();

        return view('comedy',[
            'book'=>$bukumodel,
            'category'=>$kategori,
            'publisher'=>$publishers,
            'bookcategory'=> $bookcategorys,
            'title'=>'Comedy'
        ]);
    }

    public function adventure(){
        $bukumodel = BookModel::all();
        $kategori = CategoryModel::all();
        $publishers = PublisherModel::all();
        $bookcategorys = BookCategoryModel::all();

        return view('adventure',[
            'book'=>$bukumodel,
            'category'=>$kategori,
            'publisher'=>$publishers,
            'bookcategory'=> $bookcategorys,
            'title'=>'Adventure'
        ]);
    }

    public function romance(){
        $bukumodel = BookModel::all();
        $kategori = CategoryModel::all();
        $publishers = PublisherModel::all();
        $bookcategorys = BookCategoryModel::all();

        return view('romance',[
            'book'=>$bukumodel,
            'category'=>$kategori,
            'publisher'=>$publishers,
            'bookcategory'=> $bookcategorys,
            'title'=>'Romance'
        ]);
    }
}
