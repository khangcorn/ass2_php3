<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Categories;

class HomeController extends Controller
{
   public function index()
   {

      $news = News::all();

      $categories = Categories::all();
      return view('client.index', ['news' => $news, 'categories' => $categories]);
   }
   public function show($id)
   {
      $newDetails = News::query()->find($id);
      $categories = Categories::all();
      return view('client.detail-new', 
      ['newDetails' => $newDetails,
       'categories' => $categories]);
   }

   public function Categories()
   {
      $categories = Categories::all();
      return view(
         'client.detail-new',

         ['categories'  => $categories]
      );
   }

   public function newCategory($id)
   {
      $category = Categories::find($id);
      return view(
         'client.category',

         ['categories'  => $category]
      );
   }
}
