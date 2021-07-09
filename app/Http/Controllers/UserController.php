<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    /**
     * @return Collection
     */
    public function fileImportExport()
    {
        return view('file-import');
    }

    /**
     * @return Collection
     */
    public function fileImport(Request $request)
    {
        Excel::import(new UsersImport, $request->file('file')->store('temp'));
        return back();
    }
}
