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

    public function add()
    {
        return view("add");
    }
    public function postAdd(Request $request)
    {
        $request->validate([
            "price" => "required|integer",
            "type_price" => "required",
            "content" => "required"
        ]);
        DB::table("chitieu")->insert([
            "price" => $request->price,
            "type_price" => $request->price_type,
            "content" => $request->content
        ]);
        return redirect("/");
    }
    public function search(Request $request)
    {
        $request->validate([
            "date" => "required|integer"
        ], [
            "date.integer" => "integer"
        ]);
        $data = DB::table("chitieu")->whereDay("created_at", "=", $request->date)->get();
        return view("welcome", compact("data"));
    }
}
