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
        $item->title = $request->input('title');
        $item->state = "category";
        $item->category_id = "";
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/images/', $filename);
            $item->image = $filename;
        }
        $item->save();
        return redirect()->route('kategooria')->with('success', 'Data updated successfully.');
    }
}
