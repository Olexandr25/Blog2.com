<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postproblem;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Postproblem::all();
        return view('admin/index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog = Postproblem::all();
        return view('admin/create', compact('blog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, array(
            'title' => 'required|max:255',
            'body' => 'required'
        ));

        $blog = new Postproblem;
        $blog -> title = $request -> title;
        $blog -> body = $request -> body;

        $blog -> save();

        return redirect() -> route('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Postproblem::find($id);
        return view('admin/show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Postproblem::find($id);
        return view('admin/edit', compact('blog'));
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
        $blog = Postproblem::find($id);

        $this->validate($request, array(
            'title' => 'required|max:225',
            'body' => 'required'
        ));

        $blog = Postproblem::find($id);

        $blog -> title = $request -> title;
        $blog -> body = $request -> body;

        $blog -> save();

        return redirect()->route('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Postproblem::find($id);
        $blog->delete();
        return redirect()->route('admin')->with('success','Post deleted success');
    }
}
