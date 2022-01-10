<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Film;

class FilmController extends BaseController
{
    

    public function list(){
        $films=new Film();
        $data['films']=$films->findAll();
        return view('list', $data);
    }

    public function insert(){
        return view('insert');
    }

    public function store(){
        $title = $this->request->getPost('title');
        $genre = $this->request->getPost('genre');
        $description = $this->request->getPost('description');
        

        $film= new Film();
        $data = [
            'title' => $title,
            'genre'    => $genre,
            'description' => $description,
        ];
        $film->save($data);
        return redirect()->to(base_url('/'))->with('status', 'Film inserito correttamente');
    }


    public function edit($id){
        $film= new Film();
        $data['film']=$film->find($id);
        return view ('edit',$data);

    }

    public function update($id){
        $title = $this->request->getPost('title');
        $genre = $this->request->getPost('genre');
        $description = $this->request->getPost('description');

        $film= new Film();

        $data = [
            'title' => $title,
            'genre'    => $genre,
            'description' => $description,
        ];

        $film->update($id,$data);
        return redirect()->to(base_url('/'))->with('status', 'Film modificato correttamente');

    }

    public function delete($id){
        $film= new Film();
        $film->delete($id);
        return redirect()->to(base_url('/'))->with('status', 'Film eliminato correttamente');

    }

    public function search(){
        $search = $this->request->getGet('search');
        $film= new Film();
        $data['films']=$film->like('title',$search)->findAll();
        return view ('search',$data);

    }
}
