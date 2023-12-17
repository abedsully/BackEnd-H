<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{

    public function show(Request $request)
    {
        $bukus = Buku::all();

        $bukus = $bukus->reverse();

        return view('dashboard', compact('bukus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addBuku');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'title' => 'required|min:5|max:20',
            'description' => 'required',
            'author' => 'required',
            'stocks' => 'required',
            'date' => 'required',
        ]);

        $filename = NULL;

        if($request->file('image') != NULL) {
            $extension = $request->file('image')->getClientOriginalExtension(); // .png atau .jpg dll -> extension file nya
            $originalName = pathinfo($request->file('image')->getClientOriginalName(), PATHINFO_FILENAME); //logo -> nama file nya
            $filename = $originalName. '_'. $extension; // logo_png
            $request->file('image')->storeAs('/public/images', $filename);
        }

        Buku::create([
            'title' => $request->title,
            'description' => $request->description,
            'author' => $request->author,
            'stocks' => $request->stocks,
            'date' => $request->date,
            'image' => $filename
        ]);

        return redirect('dashboard');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBukuRequest $request, Buku $buku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        //
    }
}
