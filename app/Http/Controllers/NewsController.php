<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Services\NewsService;

class NewsController extends Controller
{
    protected NewsService $newsService;

    public function __construct(NewsService $newsService){
        $this->newsService = $newsService;
    }

    public function index()
    {
        $news = $this->newsService->list(3);
        return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(StoreNewsRequest $request)
    {
        $this->newsService->create($request->validated());
        return redirect()->route('news.index');
    }

    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    public function update(StoreNewsRequest $request, News $news)
    {
        $this->newsService->update($news, $request->validated());
        return redirect()->route('news.index');
    }

    public function destroy(News $news)
    {
        $this->newsService->delete($news);
        return redirect()->route('news.index');
    }
}