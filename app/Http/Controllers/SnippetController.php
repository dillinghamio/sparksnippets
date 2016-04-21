<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Snippet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SnippetController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('snippets.index')->with([
            'snippets' => Snippet::all(),
            ]);
    }

    public function show($snippet_id)
    {
        return view('snippets.show')->with([
            'snippet' => Snippet::find($snippet_id),
            ]);
    }

    public function create()
    {
        $this->middleware('auth');

        return view('snippets.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'snippet' => 'required',
        ]);

        $input = $request->all();

        $user = Auth::user();

        $snippet = $user->snippets()->create([
            'title' => $input['title'],
            'description' => $input['description'],
            'snippet' => $input['snippet']
        ]);

        return view('snippets.index');
    }
}
