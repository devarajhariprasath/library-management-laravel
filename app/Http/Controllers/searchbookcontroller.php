<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class searchbookcontroller extends Controller
{
    function search(Request $request){
        if(isset($_GET['query'])){
            $search_text=$_GET['query'];
            $books=DB::table('bookdetails')->where('title','Like','%'.$search_text.'%')->paginate(2);
            return view('searchbooks',['books'=>$books]);
            
        }else{
        return view('searchbooks');
        }
    }
}
