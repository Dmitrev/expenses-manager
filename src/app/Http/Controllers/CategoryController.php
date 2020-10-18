<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(Request $request)
    {
        $category = new Category();
        $category->name = $request->input('name');
        return $category->save();
    }

    public function all()
    {
        return Category::paginate(15);
    }
}
