<?php
namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TodosController extends Controller
{
    public function index()
    {
        return Todo::all();
    }

    public function store(Request $request)
    {
        $todo = new Todo;

        $todo->body = $request->input('body');
        $todo->completed = $request->input('completed');
        $todo->save();
    }

}
