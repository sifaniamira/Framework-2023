<?php

namespace App\Models;

use CodeIgniter\Model;

class GenreModel extends Model
{

    protected $table                = 'genre';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $allowFields          = [];


    public function getGenre(){

       $data =[
            [
                "nama_genre"  => "Horor",
                "craeted_at"  => "",
                "updated_at"  => ""
            ],
            [
                "nama_genre"  => "Drama",
                "craeted_at"  => "",
                "updated_at"  => ""
            ],
            [
                "nama_genre"  => "Action",
                "craeted_at"  => "",
                "updated_at"  => ""
            ],
            [
                "nama_genre"  => "Comedy",
                "craeted_at"  => "",
                "updated_at"  => ""
            ]
        ];

        return $data;
    }

    public function getAllData(){
       return $this->findAll();
    }

    public function getDataByID($id){
        return $this->find($id);
    }

    public function getDataBy($data){
        return $this->where("nama_genre", $data)->findAll();
    }

    public function getOrderBy(){
        return $this->orderBy("created_at","desc")->findAll();
    }

    public function getLimit(){
        return $this->limit(5)->get()->getResultArray();
    }
}
