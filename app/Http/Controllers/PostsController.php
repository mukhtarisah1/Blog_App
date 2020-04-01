<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Illuminate\Support\Facades\storage;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }
    public function index()
    {
         $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'body'=>'required',
            'cover_image'=>'image|nullable|max:1999'
            ]);
            
        //handle the file upload
        if($request->hasFile('cover_image')){

        //get the full filename
        $fileNameWithExt= $request->file('cover_image')->getClientOriginalName();
        //get just filename
        $fileName= pathinfo($fileNameWithExt,PATHINFO_FILENAME);    
        //get just the extention
        $extension = $request->file('cover_image')->getClientOriginalExtension();
        //fileNameToStore
        $fileNametoStore= $fileName.'_'.time().'.'. $extension;
        //upload the image
        $path =$request->file('cover_image')->storeAs('public/cover_image',$fileNametoStore);
        }
        else{
            $fileNametoStore='noimage.jpg';
        }


            $post= new Post;
            $post->title= $request->input('title');
            $post->body= $request->input('body');
            $post->user_id= auth()->user()->id;
            $post->cover_image=$fileNametoStore;
            $post->save();

            return redirect('/posts')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);
        return view('posts.show')->with('posts',$posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $posts = Post::find($id);
            if(auth()->user()->id !== $posts->user_id){
                 return redirect('/posts')->with('error','Unauthorized access');
            }
            return view('posts.edit')->with('posts',$posts);

            
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
        if($request->hasFile('cover_image')){

            //get the full filename
            $fileNameWithExt= $request->file('cover_image')->getClientOriginalName();
            //get just filename
            $fileName= pathinfo($fileNameWithExt,PATHINFO_FILENAME);    
            //get just the extention
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //fileNameToStore
            $fileNametoStore= $fileName.'_'.time().'.'. $extension;
            //upload the image
            $path =$request->file('cover_image')->storeAs('public/cover_image',$fileNametoStore);
            }
            
        $this->validate($request, [
            'title'=>'required',
            'body'=>'required',
            'cover_image'=>'image|nullable|max:1999']);

            $post = Post::find($id);
            $post->title= $request->input('title');
            $post->body= $request->input('body');
            if($request->hasFile('cover_image')){
                $post->cover_image=$fileNametoStore;
            }
            $post->save();

            return redirect('/posts')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts= Post::find($id);
        //check for the authorized user
        if(auth()->user()->id== !$posts->user_id){
            return redirect('/posts')->with('error','Unauthorized access');
       }
       if($posts->cover_image !=noimage.jpg){
           Storage::delete('public/cover_image/$posts->cover_image');
       }
        $posts->delete();
        return redirect('/posts')->with('success','Post Removed');

    }
}
