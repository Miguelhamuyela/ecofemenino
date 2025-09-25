<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleryController extends Controller
{
    public function index()
    {
        $galeries = Galery::latest()->paginate(10);
        return view('_admin.galeries.galery.index', compact('galeries')); // Path correto
    }

    public function create()
    {
        return view('_admin.galeries.galeryCreate.index'); // Path correto
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $path = $request->file('image')->store('public/images/galery');
        Galery::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => basename($path),
        ]);

        return redirect()->route('admin.galery.index')->with('success', 'Imagem criada com sucesso.');
    }

    public function edit(Galery $galery)
    {
        return view('_admin.galeries.galeryEdit.index', compact('galery')); // Assumindo subpasta galeryEdit
    }

    public function update(Request $request, Galery $galery)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            Storage::delete('public/images/galery/' . $galery->image);
            $path = $request->file('image')->store('public/images/galery');
            $request->merge(['image' => basename($path)]);
        }

        $galery->update($request->all());
        return redirect()->route('admin.galery.index')->with('success', 'Imagem atualizada com sucesso.');
    }

    public function show(Galery $galery)
    {
        return view('_admin.galeries.galeryView.index', compact('galery')); // Assumindo subpasta galeryView
    }

    public function destroy(Galery $galery)
    {
        Storage::delete('public/images/galery/' . $galery->image);
        $galery->delete();
        return redirect()->route('admin.galery.index')->with('success', 'Imagem deletada com sucesso.');
    }
}