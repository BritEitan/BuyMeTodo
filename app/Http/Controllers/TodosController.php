<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $todos = DB::table('todos')->get();
        return view('todo.id', ['todos' => $todos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($title)
    {
        //
        DB::table('todos')->insert(
                ['title' => $title, "isCompleted" => 0]
                );
    }


    public function update($id,$title,$isCompleted)
    {
        //
        DB::table('todos')->where('id', '=', $id)->update(['title' => $title, 'isCompleted' => $isCompleted]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('todos')->where('id', '=', $id)->delete();
    }
}
