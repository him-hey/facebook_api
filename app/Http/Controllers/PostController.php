<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        if(count($posts)){
            return response()->json(['message' => 'No data in database'], 200);
        }
        return response()->json(['message' => 'request successfully', 'data' => $posts], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'title' => 'required|max:20',
            'descr' => 'min:5',
            'user_id' => 'required',
        ]);
        if($validator->fails()){
            return $validator->errors();
        }
        $post = Post::create($validator->validated());
        return response()->json(['message'=>'post create successfully'], 200);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $posts = User::find($id)->posts;
        return response()->json(['message' => 'request successfully', 'data' => $posts], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
