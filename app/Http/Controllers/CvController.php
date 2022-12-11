<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class CvController extends Controller
{
public function index()
{
$viewData = [];
$viewData["title"] = "Home Page - MyPortfolio";
return view('home.index')->with("viewData", $viewData);
}
public function cv()
{
$viewData = [];
$viewData["title"] = "Cv - MyPortfolio";
$viewData["subtitle"] = "Curriculum vitae";
$viewData["description"] = "To access my CV please click the following link:";
$viewData["author"] = "Developed by: Bilal Nkouandou";
return view('home.cv')->with("viewData", $viewData);
}
}