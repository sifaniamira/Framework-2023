<?php

namespace App\Controllers;

use App\Controllers\BaseController;

// step 1
use App\Models\GenreModel;

class Genre extends BaseController
{
    // step 2
    protected $genre;
    // step 3 buat fungsi construct untuk inisiasi class model
    public function __construct()
    {
        // step 4
        $this->genre = new GenreModel(); 
    }

    public function index()
    {
        $data['data_genre'] = $this->genre->getGenre();
        return view("genre/index", $data);
    }

    public function all(){
        $data['semuagenre'] = $this->genre->getAllData();
        return view("genre/semuagenre", $data);
    }

    public function genre_by_id(){
        dd($this->genre->getDataByID(1));
    }

    public function genre_by_nama_genre(){
        dd($this->genre->getDataBy("Horor"));
    }

    public function genre_order(){
        dd($this->genre->getOrderBy());
    }

    public function genre_limit_five(){
        dd($this->genre->getLimit());
    }
}
