<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title'  => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'status' => 'available',
            ],
            [
                'title'  => '1984',
                'author' => 'George Orwell',
                'status' => 'available',
            ],
            [
                'title'  => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'status' => 'borrowed',
            ],
            [
                'title'  => 'Pride and Prejudice',
                'author' => 'Jane Austen',
                'status' => 'available',
            ],
            [
                'title'  => 'Moby-Dick',
                'author' => 'Herman Melville',
                'status' => 'available',
            ],
        ];

        // Using Query Builder to insert the data into the 'books' table
        $this->db->table('books')->insertBatch($data);
    }
}