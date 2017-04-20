<?php

namespace App\Controllers;

use App\Models\User;

class HomeController extends Controller{

    public function getHome($request, $response){
        $user = User::where('id', 1)->first();
        
        return $this->_view->render($response, 'home.twig', [
            'name' => $user->username,
            'new_name' => $request->getAttribute('new_name')
        ]);
    }
}