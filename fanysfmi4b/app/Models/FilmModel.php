<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{

    protected $table                = 'film';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $allowFields          = [];


    public function getFilm(){

       $data =[
            [
                "nama_film" => "Sewu Dino",
                "genre"     => "Horor",
                "duration"  => "1 Jam 43 menit"
            ],
            [
                "nama_film" => "Fast And Forious X",
                "genre"     => "Action",
                "duration"  => "2 Jam 9 menit"
            ],
            [
                "nama_film" => "Teletabis The Movie",
                "genre"     => "Scient Fiction",
                "duration"  => "1 Jam  9 menit"
            ],
            [
                "nama_film" => "Ayah Mengapa Aku Berbeda",
                "genre"     => "Drama",
                "duration"  => "9 Jam 9 menit"
            ],
            [
                "nama_film" => "Coldplay",
                "genre"     => "Drama",
                "duration"  => "4 Jam 2 menit"
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
        return $this->where("genre", $data)->findAll();
    }

    public function getOrderBy(){
        return $this->orderBy("created_at","desc")->findAll();
    }

    public function getLimit(){
        return $this->limit(5)->get()->getResultArray();
    }
}
