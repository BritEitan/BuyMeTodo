<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TodosDBController extends Controller
{
    public function index()
    {
        $todos = DB::table('todos')->get();
        return view('todo.id', ['todos' => $todos]);
    }
    
    public function insert($title)
    {
        DB::table('todos')->insert(
                ['title' => $title, "isCompleted" => 0]
                );
    }
    public function remove($id)
    {
        DB::table('todos')->where('id', '=', $id)->delete();
    }
    public function update($id,$title,$isCompleted)
    {
            DB::table('todos')->where('id', '=', $id)->update(['title' => $title, 'isCompleted' => $isCompleted]);
    }
}