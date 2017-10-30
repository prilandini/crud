<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todo = Todo::all();
        return $todo;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $todo = new Todo;
        $todo->id = $request->id;
        $todo->do = $request->do;
        $todo->status = $request->status;
        $todo->save();

        return [
            "success" => True, 
            "message" => "Your Data has been save successfully", 
            "data" => $todo
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $todo = Todo::findOrFail($id);
        $todo->id = $request->id;
        $todo->do = $request->do;
        $todo->status = $request->status;
        $todo->update();

        return [
            "success" => True, 
            "message" => "Your Data has been updated successfully", 
            "data" => $todo
        ];
    }

    /**
     * Remove the specified resource from storage.
     *p
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        return [
            "success" => True, 
            "message" => "Your Data has been removed successfully", 
        ];
        // if($todo){
        //     $todo->delete();
        // }
        // return [
        //     "success" => True, 
        //     "message" => "Your Data has been remove successfully", 
        //     "data" => $todo
        // ]; 
    }
}
