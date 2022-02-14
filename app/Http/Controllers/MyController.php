<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Imports\UsersImport;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;

class MyController extends Controller
{
    public function importView()
    {
       return view('import');
    }
    public function success()
    {
       return view('success');
    }
    public function import(Request $request) 
    {
        $file = $request->file('file')->store('import');
        $import = new UsersImport;
        $import->import($file);
        if($import->failures()->isNotEmpty()){
                 return view('success',['alldata' => $import->failures()]);
         }
        //Excel::import(new UsersImport,request()->file('file'));
        return view('success');
    }
    public function userList()
    {
        $data = User::paginate(10);
        return view('userList',['userdata'=>$data]);
    }
}
