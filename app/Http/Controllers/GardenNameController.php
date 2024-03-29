<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class GardenNameController extends Controller
{
    public function garden1(Request $request)
    {
        $queryBuilder = Product::query();
        $search = $request->query('search');
        $price = $request->get('price');
        $category = $request->get('category');
        $events = $queryBuilder->paginate(9)->appends(['search' => $search]);
        if ($search && strlen($search) > 0) {
            $queryBuilder = $queryBuilder->where('name', 'like', '%' . $search . '%')
                ->orWhere('vitamin', 'like', '%' . $search . '%')
                ->orWhere('nutrient', 'like', '%' . $search . '%');

        }
        $gardenName = Product::query()->where('gardenName', 'like', 'Monstercat')->limit(20)->get();

        if ($price == 1) {
            $queryBuilder = $queryBuilder->whereBetween('price', [0, 20]);
        }
        if ($price == 2) {
            $queryBuilder = $queryBuilder->whereBetween('price', [20, 5]);
        }
        if ($price == 3) {
            $queryBuilder = $queryBuilder->whereBetween('price', [50, 100]);
        }
        if ($price == 4) {
            $queryBuilder = $queryBuilder->where('price', '>', 100);
        }
        if ($category == 1) {
            $queryBuilder = $queryBuilder->where('category', '=', 1);
        }
        if ($category == 2) {
            $queryBuilder = $queryBuilder->where('category', '=', 2);
        }
        if ($category == 3) {
            $queryBuilder = $queryBuilder->where('category', '=', 3);
        }
        $newProduct = Product::query()->orderBy('id', 'DESC')->take(6)->get();
        return view('client/gardenName/gardenName1', [
            'list' => $events,
            'newProduct' => $newProduct,
            'price' => $price,
            'gardenName' => $gardenName,
            'category' => $category
        ]);
    }

    public function garden2(Request $request)
    {
        $queryBuilder = Product::query();
        $search = $request->query('search');
        $price = $request->get('price');
        $category = $request->get('category');
        if ($search && strlen($search) > 0) {
            $queryBuilder = $queryBuilder->where('name', 'like', '%' . $search . '%')
                ->orWhere('vitamin', 'like', '%' . $search . '%')
                ->orWhere('nutrient', 'like', '%' . $search . '%');
        }
        $gardenName = Product::query()->where('gardenName', 'like', 'UltraSonic-Sound')->limit(21)->get();

        if ($price == 1) {
            $queryBuilder = $queryBuilder->whereBetween('price', [0, 20]);
        }
        if ($price == 2) {
            $queryBuilder = $queryBuilder->whereBetween('price', [20, 50]);
        }
        if ($price == 3) {
            $queryBuilder = $queryBuilder->whereBetween('price', [50, 100]);
        }
        if ($price == 4) {
            $queryBuilder = $queryBuilder->where('price', '>', 100);
        }

        if ($category == 1) {
            $queryBuilder = $queryBuilder->where('category', '=', 1);
        }
        if ($category == 2) {
            $queryBuilder = $queryBuilder->where('category', '=', 2);
        }
        if ($category == 3) {
            $queryBuilder = $queryBuilder->where('category', '=', 3);
        }
        $events = $queryBuilder->paginate(9)->appends(['search' => $search]);
        $newProduct = Product::query()->orderBy('id', 'DESC')->take(6)->get();
        return view('client/gardenName/gardenName2', [
            'list' => $events,
            'newProduct' => $newProduct,
            'price' => $price,
            'gardenName' => $gardenName,
            'category' => $category
        ]);
    }

    public function garden3(Request $request)
    {
        $queryBuilder = Product::query();
        $search = $request->query('search');
        $price = $request->get('price');
        $gardenName = $request->get('gardenName');
        $category = $request->get('category');
        $garden = Product::query()->where('gardenName', 'like', 'Dharma Studio')->limit(21)->get();
        if ($search && strlen($search) > 0) {
            $queryBuilder = $queryBuilder->where('name', 'like', '%' . $search . '%')
                ->orWhere('vitamin', 'like', '%' . $search . '%')
                ->orWhere('nutrient', 'like', '%' . $search . '%');
        }
        if ($price == 1) {
            $queryBuilder = $queryBuilder->whereBetween('price', [0, 20]);
        }
        if ($price == 2) {
            $queryBuilder = $queryBuilder->whereBetween('price', [20, 50]);
        }
        if ($price == 3) {
            $queryBuilder = $queryBuilder->whereBetween('price', [50, 100]);
        }
        if ($price == 4) {
            $queryBuilder = $queryBuilder->where('price', '>', 100);
        }
        if ($category == 1) {
            $queryBuilder = $queryBuilder->where('category', '=', 1);
        }
        if ($category == 2) {
            $queryBuilder = $queryBuilder->where('category', '=', 2);
        }
        if ($category == 3) {
            $queryBuilder = $queryBuilder->where('category', '=', 3);
        }
        $events = $queryBuilder->paginate(9)->appends(['search' => $search]);
        $newProduct = Product::query()->orderBy('id', 'DESC')->take(6)->get();
        return view('client/gardenName/gardenName3', [
            'list' => $events,
            'newProduct' => $newProduct,
            'price' => $price,
            'gardenName' => $gardenName,
            'garden' => $garden,
            'category' => $category
        ]);
    }

    public function garden4(Request $request)
    {
        $queryBuilder = Product::query();
        $search = $request->query('search');
        $price = $request->get('price');
        $gardenName = $request->get('gardenName');
        $category = $request->get('category');
        $garden = Product::query()->where('gardenName', 'like', 'Revealed')->limit(21)->get();
        if ($search && strlen($search) > 0) {
            $queryBuilder = $queryBuilder->where('name', 'like', '%' . $search . '%')
                ->orWhere('vitamin', 'like', '%' . $search . '%')
                ->orWhere('nutrient', 'like', '%' . $search . '%');
        }
        if ($price == 1) {
            $queryBuilder = $queryBuilder->whereBetween('price', [0, 20]);
        }
        if ($price == 2) {
            $queryBuilder = $queryBuilder->whereBetween('price', [20, 50]);
        }
        if ($price == 3) {
            $queryBuilder = $queryBuilder->whereBetween('price', [50, 100]);
        }
        if ($price == 4) {
            $queryBuilder = $queryBuilder->where('price', '>', 100);
        }

        if ($category == 1) {
            $queryBuilder = $queryBuilder->where('category', '=', 1);
        }
        if ($category == 2) {
            $queryBuilder = $queryBuilder->where('category', '=', 2);
        }
        if ($category == 3) {
            $queryBuilder = $queryBuilder->where('category', '=', 3);
        }
        $events = $queryBuilder->paginate(9)->appends(['search' => $search]);
        $newProduct = Product::query()->orderBy('id', 'DESC')->take(6)->get();
        return view('client/gardenName/gardenName4', [
            'list' => $events,
            'newProduct' => $newProduct,
            'price' => $price,
            'gardenName' => $gardenName,
            'garden' => $garden,
            'category' => $category
        ]);
    }

    public function garden5(Request $request)
    {
        $queryBuilder = Product::query();
        $search = $request->query('search');
        $price = $request->get('price');
        $category = $request->get('category');
        $garden = Product::query()->where('gardenName', 'like', 'Nhà Vườn Tiến Dũng')->limit(21)->get();
        if ($search && strlen($search) > 0) {
            $queryBuilder = $queryBuilder->where('name', 'like', '%' . $search . '%')
                ->orWhere('vitamin', 'like', '%' . $search . '%')
                ->orWhere('nutrient', 'like', '%' . $search . '%');
        }

        if ($price == 1) {
            $queryBuilder = $queryBuilder->whereBetween('price', [0, 20]);
        }
        if ($price == 2) {
            $queryBuilder = $queryBuilder->whereBetween('price', [20, 50]);
        }
        if ($price == 3) {
            $queryBuilder = $queryBuilder->whereBetween('price', [50, 100]);
        }
        if ($price == 4) {
            $queryBuilder = $queryBuilder->where('price', '>', 100);
        }

        if ($category == 1) {
            $queryBuilder = $queryBuilder->where('category', '=', 1);
        }
        if ($category == 2) {
            $queryBuilder = $queryBuilder->where('category', '=', 2);
        }
        if ($category == 3) {
            $queryBuilder = $queryBuilder->where('category', '=', 3);
        }
        $events = $queryBuilder->paginate(9)->appends(['search' => $search]);
        $newProduct = Product::query()->orderBy('id', 'DESC')->take(6)->get();
        return view('client/gardenName/gardenName5', [
            'list' => $events,
            'newProduct' => $newProduct,
            'price' => $price,
            'garden' => $garden,
            'category' => $category
        ]);
    }
}



