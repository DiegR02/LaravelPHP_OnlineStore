<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    $viewData = [];
    $viewData["title"] = "Home Page - Online Store";
    return view('home.index')->with("viewData", $viewData);
  }

  public function about()
  {
    $viewData = [];
    $viewData["title"] = "About us - Online Store";
    $viewData["subtitle"] =  "About us";
    $viewData["description"] =  "This is a Online Store specialiced in the selling of mobile phones, where you can find your favorite brands at the best prices";
    $viewData["description_2"] =  "Cheer up, and discover how easy and comfortable is to make a purchase in our shop.";
    $viewData["description_3"] =  "The shipping of our products are one of the fastest and secure in the market, we got a really good warranty.";
    $viewData["description_4"] =  "Contact information: ";
    $viewData["author"] = "Post updated by: Diego R. Fernández";
    $viewData["number"] = "Number :+34 644 97 51 13";
    $viewData["adress"] = "Adress: C/San Vicente de Paul";
    $viewData["email"] = "Email: MyOnlineStore@myonlinestore.myos";
    return view('home.about')->with("viewData", $viewData);
    
  }

}