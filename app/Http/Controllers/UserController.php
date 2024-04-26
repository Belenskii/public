<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    
    {
      $data = [
        [
            "id" => 1,
            "name" => "John Carlo Diga",
            "username" => "Digadigs",
            "email" => "digadigs@pogiako.org",
            "phone" => "0999999"
        ],

        [
            "id" => 2,
            "name" => "John Mark Faeldonia",
            "username" => "jm",
            "email" => "johnmack@gmail.com",
            "phone" => "0988888"
        ],


        
      ];

      return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
