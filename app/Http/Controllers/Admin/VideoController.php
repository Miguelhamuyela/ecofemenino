<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::latest()->paginate(10);
        return view('_admin.videos.video.index', compact('videos')); // Ajustado para subpasta video
    }

    public function create()
    {
        return view('_admin.videos.videoCreate.index'); // Ajustado para subpasta videoCreate
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:video,podcast',
            'detach' => 'required|in:normal,destaque,urgente',
            'description' => 'nullable|string',
            'url' => 'required|url',
        ]);

        Video::create($request->all());
        return redirect()->route('admin.video.index')->with('success', 'Vídeo/Podcast criado com sucesso.');
    }

    public function edit(Video $video)
    {
        return view('_admin.videos.videoEdit.index', compact('video')); // Assumindo subpasta videoEdit
    }

    public function update(Request $request, Video $video)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:video,podcast',
            'detach' => 'required|in:normal,destaque,urgente',
            'description' => 'nullable|string',
            'url' => 'required|url',
        ]);

        $video->update($request->all());
        return redirect()->route('admin.video.index')->with('success', 'Atualizado com sucesso.');
    }

    public function show(Video $video)
    {
        return view('_admin.videos.videoView.index', compact('video')); // Assumindo subpasta videoView
    }

    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('admin.video.index')->with('success', 'Deletado com sucesso.');
    }
}