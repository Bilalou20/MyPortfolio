<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
public function index()
{
$viewData = [];
$viewData["title"] = "Home Page - MyPortfolio";
return view('home.index')->with("viewData", $viewData);
}
public function about()
{
    $viewData = [];
    $viewData["title"] = "About me - MyPortfolio";
    $viewData["subtitle"] = "About me";
    $viewData["description"] = "";
    $viewData["author"] = "";
    return view('home.about')->with("viewData", $viewData);
}
}
