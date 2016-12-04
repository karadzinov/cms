<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Category as Category;
use Baum;
use Session;
use Intervention\Image\ImageManagerStatic as Image;
use App\Sliders as Slider;
use App\User as User;
use App\Country as Country;
use App\Product as Product;
use App\Workflow as Workflow;
use Input;
use DB;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('main.contact');
    }
}
