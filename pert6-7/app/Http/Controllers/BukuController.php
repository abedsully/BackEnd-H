<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
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
            'title' => 'required|unique:bukus',
            'description' => 'required',
            'author' => 'required',
            'stocks' => 'required',
            'date' => 'required',
        ]);

        $filename = NULL;

        if($request->file('image') != NULL) {
            // KALAU USER TIDAK MENGINPUT IMAGE, CODE BERIKUT YANG AKAN DIEKSEKUSI

            // Misalnya ada file image logo.png, ini akan mengambil .png nya saja, dan .png akan disetor sebagai variable extension
            $extension = $request->file('image')->getClientOriginalExtension();

            // Misalnya ada file image logo.png, ini akan mengambil logo nya saja, dan logo akan disetor sebagai variabel originalName
            $originalName = pathinfo($request->file('image')->getClientOriginalName(), PATHINFO_FILENAME);

            // Filename sekarang, logo.png
            $filename = $originalName. '_'.$extension;

            // Dia masukkan ke dalam folder public images, dengan nama $filename yang udah dibikin di atas
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

        return redirect('/dashboard')->with('success', 'Buku has been created successfully!');
    }

    public function showDetail($id) 
    {
        $buku = Buku::find($id);
        return view('showDetail', compact('buku'));  
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $bukus = Buku::find($id);

        return view('editBuku', compact('bukus'));

    }

    public function update(Request $request, $id)
    {

        $validasi = $request->validate([
            'title' => 'required|unique:bukus',
            'description' => 'required',
            'author' => 'required',
            'stocks' => 'required',
            'date' => 'required',
        ]);


        $filename = NULL;

        if($request->file('image') != NULL) {
            // KALAU USER TIDAK MENGINPUT IMAGE, CODE BERIKUT YANG AKAN DIEKSEKUSI

            // Misalnya ada file image logo.png, ini akan mengambil .png nya saja, dan .png akan disetor sebagai variable extension
            $extension = $request->file('image')->getClientOriginalExtension();

            // Misalnya ada file image logo.png, ini akan mengambil logo nya saja, dan logo akan disetor sebagai variabel originalName
            $originalName = pathinfo($request->file('image')->getClientOriginalName(), PATHINFO_FILENAME);

            // Filename sekarang, logo.png
            $filename = $originalName. '_'.$extension;

            // Dia masukkan ke dalam folder public images, dengan nama $filename yang udah dibikin di atas
            $request->file('image')->storeAs('/public/images', $filename);
        }

        Buku::findorFail($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'author' => $request->author,
            'stocks' => $request->stocks,
            'date' => $request->date,
            'image' => $filename
        ]);

        return redirect('/dashboard')->with('success', 'Buku has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Buku::destroy($id);
        return redirect('/dashboard')->with('success', 'Buku has been deleted successfully!');
    }
}
