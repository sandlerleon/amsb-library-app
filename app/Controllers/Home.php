<?php

namespace App\Controllers;

use App\Models\BookModel;

class Home extends BaseController
{
    public function index(): string
    {
        $model = new BookModel();
        
        // Fetches all row records from the 'books' table
        $data['books'] = $model->findAll();

        return view('books_list', $data);
    }
}