<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function showAll()
    {
        $data = Blogs::all();
        return view('index', [
            "data" => $data
        ]);
    }

    public function findById(int $id)
    {
        return view('blog', [
            "data" => Blogs::find($id)
        ]);
    }

    public function admin()
    {
        return view('auth.admin',["blogs"=>Blogs::all()]);
    }
   

    public function creatNewBlog(Request $request)
    {
        $formFields = $request->validate([
            'title'=>'required',
            'content'=>'required',
            'img'=>'required'
        ]);
        //dd($request->all());

        if ($request->hasFile('img')){
            $formFields['img'] = $request->file('img')->store('imgs','public');
        }

        Blogs::create($formFields);


        return redirect('/admin')->with('massage','Create new Blog ');
    }

    public function editBlog(Blogs $blog)
    {
        return view('auth.admin-update',[
            'blogs'=> Blogs::all(),
            'blogUpdate'=>$blog
        ]);
    }


    public function updateBlog(Request $request,Blogs $blogs)
    {
        $formFields = $request->validate([
            'title'=>'required',
            'content'=>'required',
        ]);
        //dd($request->all());

        if ($request->hasFile('img')){
            $formFields['img'] = $request->file('img')->store('imgs','public');
        }

       $blogs->update($formFields);


        return back()->with('massage','Update Blog ');
    }


    public function deleteBlog(Blogs $blog){
        $blog->delete();

        return redirect('/admin')->with('massage','Delete Blog ');
    }
}
