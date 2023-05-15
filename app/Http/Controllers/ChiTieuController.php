<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ChiTieuController extends Controller
{
    public function index()
    {
        $data = DB::table("chitieu")->get();
        return view("welcome", compact("data"));
    }

    
    public function postAdd(Request $request)
    {
        $request->validate([
            "price" => "required",
            "content" => "required"
        ]);
        DB::table("chitieu")->insert([
            "price" => $request->price,
            "type_price" => $request->price_type,
            "content" => $request->content,
            "created_at" => date("Y-m-d")
        ]);
        return redirect("/");
    }
    public function search(Request $request)
    {
      
        $data = DB::table("chitieu")->whereDate("created_at", "=", $request->date)->get();
        return view("welcome", compact("data"));
    }
}
