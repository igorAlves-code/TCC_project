<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teachers;

class teachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $teachers = teachers::where(function ($query) use ($search){
            if($search) {
                $query->where('nome', 'LIKE', "%{$search}%");
            }
        })->get();
        return view('admin.teachers', compact('teachers'));
    }
}
