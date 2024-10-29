<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\Client;
use Illuminate\Http\Request;

class CleintController extends Controller
{
    public function index(){
     $client=Client::all();
     return response()->json($client);
    }
    

    public function store(Request $request){
        $request->validate([
            "name"=>"required|string",
            "email"=>"required|email",
            "password"=>"required|email",
            "commpany"=>"required|email",
            "profission"=>"required|email"
        ]);
        $client=Client::add();
        $client->name=$request->name;
        $client->email=$request->email;
        $client->password=hash::make( $request->password);
        $client->name=$request->name;
        $client->create();
        return response()->json("client is created seccusfully");

    }
    public function update(Request $request,$id){
        $client=Client::findOrFail($id);
        $request->validate([
            "name"=>"required|string",
            "email"=>"required|email",
            "password"=>"required|email",
            "commpany"=>"required|email",
            "profission"=>"required|email"
        ]);
        $client=Client::add();
        $client->name=$request->name;
        $client->email=$request->email;
        $client->password=hash::make( $request->password);
        $client->name=$request->name;
        $client->create();
        return response()->json("client is created seccusfully");

    }
     public function destroy($id){
        $client=Client::findOrFail($id);
        $client->delete();
        return response()->json("client deleted seccufully");
     }

}
