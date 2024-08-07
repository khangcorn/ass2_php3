<?php

namespace App\Http\Controllers;

use Illuminate\Support\ValidatedInput;
use App\Http\Requests\NewRequest;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\News;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function filter(Request $request)
     {
         $query = News::query();
     
         // Filter by title
         if ($request->filled('title')) {
             $query->where('title', 'like', '%' . $request->input('title') . '%');
         }
     
         // Filter by start date
        
     
         // Get the filtered news
         $news = $query->get();
  
         return view('admin.list-new', compact('news'));
     }
     

     public function index()
     {
       
         $news = News::all();
     
         return view('admin.list-new', compact('news'));
     }
     


    public function create()
    {
        $categories = Categories::all();
        $latestCategory = Categories::query()->latest('id')->first();
        $user = Auth::user();
        return view('admin.add-new', ['categories' => $categories, 'latestCategory' => $latestCategory, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */



    public function store(NewRequest $request)
    {

        $news = new News();


        $news->title = $request->input('news.title');
        $news->content = $request->input('news.content');
        $news->categories_id = $request->input('news.categories_id');

        if ($request->hasFile('news.thumbnail')) {
            $thumbnail = $request->file('news.thumbnail');
            $fileName = time() . "." .  $thumbnail->getClientOriginalExtension();
            $path = $thumbnail->storeAs('news', $fileName);
            $news->thumbnail = 'news/' . $fileName;
        }
        $news->save();
        return redirect()->route('list-new');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $news = News::find($id);
        if (!$news) {
            return redirect()->route('news.index')->with('error', 'News not found');
        }
        return view('admin.update', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);

        $news->title = $request->input('title');
        $news->content = $request->input('content');
        $news->categories_id = $request->input('categories_id');

        // Handle file upload if a new file is provided
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $fileName = time() . "_" . $thumbnail->getClientOriginalName();
            $path = $thumbnail->storeAs('news', $fileName);

            // If a new thumbnail is uploaded, delete the old one
            if ($news->thumbnail && Storage::exists($news->thumbnail)) {
                Storage::delete($news->thumbnail);
            }

            $news->thumbnail = $path;
        }

        $news->save();

        return redirect()->route('list-new')->with('success', 'Updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $news = News::find($id);
        Storage::delete($news->thumbnail);
        $news->delete();
        return redirect()->route('list-new');
    }
}
