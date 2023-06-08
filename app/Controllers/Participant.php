<?php

namespace App\Controllers;

class Participant extends BaseController
{
    public function participant()
    {
        $data = [
            
            'title' => 'Form Participant'
        ];
        return view('pages/register', $data );
    }
}
    