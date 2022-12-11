<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ContactController extends Controller
{
public function index()
{
$viewData = [];
$viewData["title"] = "Home Page - MyPortfolio";
return view('home.index')->with("viewData", $viewData);
}
public function contact()
{
$viewData = [];
$viewData["title"] = "Contact - MyPortfolio";
$viewData["subtitle"] = "Contact";
$viewData["description"] = "This is an contact page ...";
$viewData["author"] = "Please make sure to fill in your information";
return view('home.contact')->with("viewData", $viewData);
}
}