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

  public function privacy()
  {
    $viewData = [];
    $viewData["title"] = "Privacy Page - Online Store";
    $viewData["subtitle"] =  "Privacy Policy";

    $viewData["description"] =  "We are responsible for maintaining and protecting the Personal Information under our control. 
    We have designated an individual or individuals who is/are responsible for compliance with our privacy policy.";

    $viewData["description_2"] =  "We collect, use and disclose Personal Information to provide you with the product or service you have 
    requested and to offer you additional products and services we believe you might be interested in. The purposes for which we collect 
    Personal Information will be identified before or at the time we collect the information. In certain circumstances, the purposes for 
    which information is collected may be clear, and consent may be implied, such as where your name, address and payment information is 
    provided as part of the order process..";

    $viewData["description_3"] =  "Knowledge and consent are required for the collection, use or disclosure of Personal Information 
    except where required or permitted by law. Providing us with your Personal Information is always your choice. However, your decision 
    not to provide certain information may limit our ability to provide you with our products or services. We will not require you to 
    consent to the collection, use, or disclosure of information as a condition to the supply of a product or service, except as required 
    to be able to supply the product or service.";

    $viewData["description_4"] =  "We will make information available to you about our policies and practices with respect to the management 
    of your Personal Information.";


    $viewData["description_5"] =  "A cookie is a small computer file or piece of information that may be stored in your computer's hard drive when you 
    visit our websites. We may use cookies to improve our website’s functionality and in some cases, to provide visitors with a customized online experience.
    Cookies are widely used and most web browsers are configured initially to accept cookies automatically. You may change your Internet browser settings 
    to prevent your computer from accepting cookies or to notify you when you receive a cookie so that you may decline its acceptance. 
    Please note, however, if you disable cookies, you may not experience optimal performance of our website.";



    return view('home.privacy')->with("viewData", $viewData);
  }

}