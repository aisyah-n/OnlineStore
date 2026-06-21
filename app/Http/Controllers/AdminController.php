<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Online Store";

        return view('admin.index')
            ->with("viewData", $viewData);
    }
}