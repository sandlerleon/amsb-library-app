<?php

namespace App\Controllers;

use App\Models\BookModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new BookModel();
        
        // Fetches all row records from the 'books' table
        $data['books'] = $model->findAll();
        $data['header_data '] =  [
            'meta_title' => 'Library App',
            'title' => 'Library App',
        ];

       
        return view('books_list', $data);
       
    }
}