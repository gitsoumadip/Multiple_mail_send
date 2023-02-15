<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;
use App\Exports\UsersExport;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;


class FileImportController extends Controller
{
    //

    public function importExportView(){
        return view('file_import.fileimportexport');
    }
    public function export(){
        return Excel::download(new UsersExport,'users.xlsx');
    }
    public function import(){
        Excel::import(new UsersImport,request()->file('importfile'));
        return back();
    }
    public function emailView()
    {
        $allMail=User::all();
        return view('file_import.allEmailView',compact('allMail'));
    }
}
