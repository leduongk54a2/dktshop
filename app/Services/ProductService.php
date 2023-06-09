<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductService
{
    public function index()
    {
        return Product::visible()
            ->select('products.id', 'img', 'products.name as product_name', 'categories.name as category_name', 'price')
            ->join('categories', 'categories.id', '=', 'products.category_id')->paginate(PER_PAGE);
    }

    public function add($data)
    {
        $imgPath = $this->uploadImage($data);
        Product::create([
            'name' => $data['name'],
            'category_id' => $data['category_id'],
            'description' => $data['description'],
            'content' => $data['content'],
            'img' => $imgPath,
            'price' => $data['price'],
            'visible' => FLAG_ON,
        ]);
    }

    public function findWithSearch($data)
    {
        return Product::where('name', 'like', '%' . $data . '%')->paginate(PER_PAGE);
    }

    public function products()
    {
        return Product::paginate(PER_PAGE);
    }

    public function showWithCate($id)
    {
        return Product::where('category_id', $id)->paginate(PER_PAGE);
    }

    public function view($id)
    {
        return Product::visible()->find($id);
    }

    public function edit($data, $productId)
    {
        $product = Product::find($productId);
        $imgPath = '';

        if (empty($data['img'])) {
            $imgPath = $product->img;
        } else {
            if (File::exists(public_path('upload/product/' . $product->img))) {
                File::delete(public_path('upload/product/' . $product->img));
            }

            $imgPath = $this->uploadImage($data);
        }

        $product->update([
            'name' => $data['name'],
            'category_id' => $data['category_id'],
            'description' => $data['description'],
            'content' => $data['content'],
            'img' => $imgPath,
            'price' => $data['price'],
        ]);
    }

    public function uploadImage($data)
    {
        $imgFile = $data['img'];
        $imgPath = time() . $imgFile->getClientOriginalName();
        $imgFile->move(public_path('upload/product/'), $imgPath);
        return $imgPath;
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->visible = FLAG_OFF;
        $product->save();
    }

    public function hotProducts()
    {
        $hotProducts = Product::hotproducts();
        $listHotProduct = implode(',', $hotProducts);
        return Product::whereIn('id', $hotProducts)
            ->orderBy(DB::raw('FIELD(id,' . $listHotProduct . ')'))->paginate(PER_PAGE);
    }

    public function paginate($collection, $perPage = PER_PAGE, $page = null)
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $total = count($collection);
        $currentPage = $page;
        $offset = ($currentPage * $perPage) - $perPage;
        $itemsToShow = array_slice($collection, $offset, $perPage);
        return new LengthAwarePaginator($itemsToShow, $total, $perPage);
    }
}
