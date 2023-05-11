<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

// use App\Models\Homepage;
// use App\Models\About;
// use App\Models\News;
// use App\Models\Pricelist;
use App\Models\Category;
// use App\Models\Feedback;

class AdminController extends Controller
{
    //
    public function createCategory(Request $request, )
    {
        $item = new Category;
        $item->title_et = $request->input('title_et');
        $item->title_en = $request->input('title_en');
        $item->state = "category";
        $item->category_id = "";
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/images/', $filename);
            $item->image = $filename;
        }
        $item->save();
        return redirect()->route('category')->with('success', 'Data updated successfully.');
    }

    public function updateCategory(Request $request, )
    {
        $id_list = explode('&', $_SERVER['QUERY_STRING']);
        $id = $id_list[0];

        $item = Category::where('id', $id)->get()[0];
        $item->state = $request->input('state');
        $item->category_id = '0';
        $item->title_et = $request->input('title_et');
        $item->title_en = $request->input('title_en');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/images/', $filename);
            $item->image = $filename;
        }
        $item->save();
        return redirect()->route('category')->with('success', 'Data updated successfully.');
    }
    
    public function deleteCategory(Request $request, )
    {
        $id_list = explode('&', $_SERVER['QUERY_STRING']);
        $id = $id_list[0];

        $item = Category::findOrFail($id);
        $item->delete();
        return redirect()->route('category')->with('success', 'Data updated successfully.');
    }

    public function addGallery(Request $request, )
    {
        $images = $request->file('images');

        foreach ($images as $image) {
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/images/', $filename);   
            
            $item = new Category;
            $item->state = "image";
            $item->category_id = $request->input('category');
            $item->image = $filename;
            $item->title_et = "";
            $item->title_en = "";
            $item->save();
        }
        return redirect()->route('category')->with('success', 'Data updated successfully.');
    }

    public function deleteGallery(Request $request, )
    {
        $id_list = explode('&', $_SERVER['QUERY_STRING']);
        $id = $id_list[0];

        $item = Category::findOrFail($id);
        $item->delete();
        return redirect()->route('category')->with('success', 'Data updated successfully.');
    }
}
