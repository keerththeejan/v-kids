<?php
// app/Http/Controllers/NewsController.php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function showLatestNews()
    {
        $latestNews = News::latest()->take(3)->get();
        return view('welcome', compact('latestNews'));
    }
    public function index()
    {
        $latestNews = News::all();
        return view('Activity', compact('latestNews'));
    }

    public function index1()
    {
        $news = News::all();
        return view('news.view', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $image = $request->file('photo');
        $imageData = file_get_contents($image->getPathName());
        $news = new News([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'link' => $request->input('link'),
            'image' => $imageData,
        ]);
        $news->save();
        $news = News::all();
        return view('news.view', compact('news'));
    }

    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $news->update($request->all());
        return view('news.view', compact('news'));
    }

    public function destroy($id)
    {
        $newses = News::findOrFail($id);
        $newses->delete();
        return redirect()->back()->with('message', 'News Deleted Successfully');
    }
}
