<?php


namespace App\Services;


use App\Models\News;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NewsService
{

    public function index()
    {
        return News::paginate(4);
    }

    public function create(array $data)
    {


    }

    public function find($id)
    {

    }

    public function update(array $data, int $id)
    {

    }

    public function remove($id)
    {

    }

    public function getPostsByType(int $type)
    {

    }
}
