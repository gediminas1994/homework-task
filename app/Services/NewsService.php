<?php

namespace App\Services;
use App\Models\News;

class NewsService
{
    public function list(int $perPage = 3)
    {
        return News::latest()->paginate($perPage);
    }

    public function create(array $data): News
    {
        return News::create($data);
    }

    public function update(News $news, array $data): News
    {
        $news->update($data);
        return $news;
    }

    public function delete(News $news): void
    {
        $news->delete();
    }
}
