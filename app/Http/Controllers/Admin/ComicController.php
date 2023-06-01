<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $val_data = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'description' => 'nullable',
            'thumb' => 'required|max:255',
            'price' => 'required|decimal|min:1.00',
            'series' => 'nullable|max:255',
            'sale_date' => 'required|date',
            'type' => 'default:comic|max:255',
        ]);

        $newComic = new Comic();
        $newComic->title = $request->title;
        $newComic->description = $request->description;
        $newComic->thumb = $request->thumb;
        $newComic->price = $request->price;
        $newComic->series = $request->series;
        $newComic->sale_date = $request->sale_date;
        $newComic->type = $request->type;

        $newComic->save();

        return to_route('comics.index')->with('message', 'comic added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $val_data = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'description' => 'nullable',
            'thumb' => 'required|max:255',
            'price' => 'required|decimal|min:1.00',
            'series' => 'nullable|max:255',
            'sale_date' => 'required|date',
            'type' => 'default:comic|max:255',
        ]);

        $comic->update($val_data);

        return to_route('comics.index')->with('message', 'comic edit successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index')->with('message', 'comic deleted successfully');
    }
}
