<?php

namespace App\Controllers;

use App\Models\BookModel;

class Book extends BaseController
{
    public function index()
    {       
        $data = [
            'meta_title' => 'Library App',
            'title' => 'Welcome to the Library App',
        ];

        
        echo '<h2>This is the library area</h2>',$data['title'];
        
    }

    public function createNew()
    {
        $data = [
            'meta_title' => 'Library App - Add New Book',
            'title' => 'Add New Book',
        ];


        return view('create_new', $data);
        
    }

    public function saveNew()
    {
        //if($this->request->getMethod() === 'post') {
            $model = new BookModel();
            $model->save([
                'title' => $this->request->getPost('title'),
                'author' => $this->request->getPost('author'),
                'status' => $this->request->getPost('status'),
                'pub_year' => $this->request->getPost('pub_year'),
            ]);
       //}
        $redirect = redirect()->to('/');
        return $redirect;
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
    }

    public function bookForm()
    {        
        return view('book_form');     
    }

}