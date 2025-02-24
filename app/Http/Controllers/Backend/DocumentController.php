<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function localDocumentView()
    {
        return view('master_setting.document.local_docs');
    }

    public function transitDocumentView()
    {
        return view('master_setting.document.transit_docs');
    }

    public function dgCargoDocumentView()
    {
        return view('master_setting.document.dg_cargo_docs');
    }

    public function reeferDocumentView()
    {
        return view('master_setting.document.reefer_docs');
    }
    public function directLoadingDocumentView()
    {
        return view('master_setting.document.direct_loading_docs');
    }
}
