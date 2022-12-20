<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class todoapp extends Controller
{
    public function index(Request $request){        
        return view('todo.index',[
            'list' => todo::latest()->filter(request())
        ]);

    }

    public function create(){

        return view('todo');
    }

    public function store(Request $request){        
        $formFields = $request->validate([
            'todo' => 'required',            
        ]);


        // if ($request->hasFile('logo')) {
        //     $formFields['logo']= $request->file('logo')->store('logos','public');
        // }

        todo::create($formFields);
        return redirect('/');
    }
}
