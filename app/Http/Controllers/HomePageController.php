<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Slider;
use App\Sliders;
use App\Blog as Blog;
use Illuminate\Http\Request;
use App\Product as Product;
use App\Category as Category;
use App\StaticPage as StaticPage;
use App\Services as Services;
use App\Settings as Settings;
use App\Referral as Refferal;
use DB;
use Session;
use Mail;
use Illuminate\Support\Facades\Route;

class HomePageController extends Controller
{


    public function index()
    {
        $settings = Settings::firstOrFail();
        $staticpages = StaticPage::all();
        $blogs = Blog::all();
        $services = Services::get();
        $sliders = Slider::all();
        $referrals = Refferal::all();
        $categories = Category::roots()->get();
        $products = Product::all();
        $tree = Category::getTreeHP($categories);
        $allcategories = DB::table('product')->join('categories', 'product.category', '=', 'categories.id')->groupBy('categories.id')->take(8)->get();
        $data = ["blogs" => $blogs, "referrals" => $referrals, "settings" => $settings, "sliders" => $sliders, "services" => $services, "staticpages" => $staticpages, "allcategories" => $allcategories, "status" => "success", "products" => $products, "categories" => $categories, "tree" => $tree];
        return view('main.homepage')->with($data);
    }


    public function contact(Request $request)
    {
	$currentPath = $request->url();
        $settings = Settings::firstOrFail();
        $staticpages = StaticPage::all();
        $blogs = Blog::all();
        $services = Services::get();
        $sliders = Slider::all();
        $referrals = Refferal::all();
        $categories = Category::roots()->get();
        $products = Product::all();
        $tree = Category::getTreeHP($categories);
        $allcategories = DB::table('product')->join('categories', 'product.category', '=', 'categories.id')->groupBy('categories.id')->take(8)->get();
        $data = ["path" => $currentPath, "blogs" => $blogs, "referrals" => $referrals, "settings" => $settings, "sliders" => $sliders, "services" => $services, "staticpages" => $staticpages, "allcategories" => $allcategories, "status" => "success", "products" => $products, "categories" => $categories, "tree" => $tree];
        return view('main.contact')->with($data);
    }

    public function sendemail(Request $request)
    {

        $email = $request['email'];
        $message = $request['message'];
        $name = $request['name'];
        $subject = $request['subject'];
        $settings = Settings::first();
        $user = $settings['email'];


        $headers = 'From: Web Site <info@frutismoothie.mk>' . "\r\n" .
            'Reply-To: Fruti Smoothie <info@frutismoothie.mk>' . "\r\n" .

            'X-Mailer: PHP/' . phpversion();


        mail($user, $subject, $message, $headers);
        Session::flash('flash_message', 'Ви благодариме');
        return redirect()->back();
    }

    public function staticpages(Request $request, $slug)
    {
	$currentPath = $request->url();
        $settings = Settings::firstOrFail();
        $services = Services::all();
        $staticpage = StaticPage::where("slug", "=", $slug)->first();
        $staticpages = StaticPage::all();
        $sliders = Slider::all();
        $categories = Category::roots()->get();
        $products = Product::all();
        $tree = Category::getTreeHP($categories);
        $allcategories = Category::get();
        $data = ["path" => $currentPath,"settings" => $settings, "sliders" => $sliders, "services" => $services, "staticpage" => $staticpage, "staticpages" => $staticpages, "allcategories" => $allcategories, "status" => "success", "products" => $products, "categories" => $categories, "tree" => $tree];
        return view('main.staticpage')->with($data);
    }

    public function getproducts(Request $request, $slug)
    {
	$currentPath = $request->url();
        $staticpages = StaticPage::all();
        $sliders = Slider::all();
        $categories = Category::roots()->get();
        $settings = Settings::firstOrFail();
        $services = Services::all();
        $tree = Category::getTreeHP($categories);
        $allcategories = Category::get();
        $category = Category::where("slug", "=", $slug)->firstOrFail();
        $products = Product::where("category", "=", $category->id)->get();
        $data = ["path" => $currentPath,"categories" => $category, "products" => $products, "settings" => $settings, "sliders" => $sliders, "services" => $services, "staticpages" => $staticpages, "allcategories" => $allcategories, "status" => "success", "tree" => $tree];
        return view('main.products')->with($data);
    }

    public function blog(Request $request, $slug)
    {
	$currentPath = $request->url();
        $settings = Settings::firstOrFail();
        $services = Services::all();
        $staticpages = StaticPage::all();
        $blog = Blog::where("slug", "=", $slug)->first();
        $sliders = Slider::all();
        $categories = Category::roots()->get();
        $products = Product::all();
        $tree = Category::getTreeHP($categories);
        $allcategories = Category::get();
        $data = ["path" => $currentPath,"blog" => $blog, "settings" => $settings, "sliders" => $sliders, "staticpages" => $staticpages, "services" => $services, "allcategories" => $allcategories, "status" => "success", "products" => $products, "categories" => $categories, "tree" => $tree];
        return view('main.blog')->with($data);
    }

    public function allblogs(Request $request)
    {
	$currentPath = $request->url();
        $settings = Settings::firstOrFail();
        $services = Services::all();
        $blogs = Blog::paginate(3);
        $staticpages = StaticPage::all();
        $sliders = Slider::all();
        $categories = Category::roots()->get();
        $products = Product::all();
        $tree = Category::getTreeHP($categories);
        $allcategories = Category::get();
        $data = ["path" => $currentPath, "blogs" => $blogs, "settings" => $settings, "sliders" => $sliders, "services" => $services, "staticpages" => $staticpages, "allcategories" => $allcategories, "status" => "success", "products" => $products, "categories" => $categories, "tree" => $tree];
        return view('main.blogs')->with($data);
    }

    public function services(Request $request, $slug)
    {
	$currentPath = $request->url();
        $settings = Settings::firstOrFail();
        $services = Services::all();
        $service = Services::where('slug', '=', $slug)->first();
        $allcategories = Category::get();
        $categories = Category::roots()->get();
        $tree = Category::getTreeHP($categories);
        $staticpages = StaticPage::all();
        $data = ["path" => $currentPath,"service" => $service, "services" => $services, "staticpages" => $staticpages, "settings" => $settings, "tree" => $tree, "categories" => $categories, "allcategories" => $allcategories];
        return view('main.services')->with($data);
    }

    public function product(Request $request, $slug)
    {
	$currentPath = $request->url();
        $settings = Settings::firstOrFail();
        $services = Services::all();
        $product = Product::where('slug', '=', $slug)->first();
        $sliders = Sliders::where('product_id', '=', $product->id)->get();
        $allcategories = Category::get();
        $categories = Category::roots()->get();
        $tree = Category::getTreeHP($categories);
        $staticpages = StaticPage::all();
        $data = ["path" => $currentPath,"sliders" => $sliders, "product" => $product, "services" => $services, "staticpages" => $staticpages, "settings" => $settings, "tree" => $tree, "categories" => $categories, "allcategories" => $allcategories];
        return view('main.product')->with($data);
    }

    public function referents(Request $request, $slug)
    {
	$currentPath = $request->url();
        $settings = Settings::firstOrFail();
        $services = Services::all();
        $referral = Refferal::all();
        if ($slug == "all") {
            $products = Product::all();
            $allcategories = Category::get();
            $categories = Category::roots()->get();
            $tree = Category::getTreeHP($categories);
            $staticpages = StaticPage::all();
            $data = ["path" => $currentPath,"referral" => $referral, "products" => $products, "services" => $services, "staticpages" => $staticpages, "settings" => $settings, "tree" => $tree, "categories" => $categories, "allcategories" => $allcategories];
            return view('main.allreferral')->with($data);
        } else {
            $category = Category::where('slug', '=', $slug)->first();
            $referral = Refferal::where('slug', '=', $slug)->first();

        }


        $allcategories = Category::get();
        $categories = Category::roots()->get();
        $tree = Category::getTreeHP($categories);
        $staticpages = StaticPage::all();
        $data = ["path" => $currentPath, "referral" => $referral, "category" => $category, "services" => $services, "staticpages" => $staticpages, "settings" => $settings, "tree" => $tree, "categories" => $categories, "allcategories" => $allcategories];
        return view('main.referral')->with($data);

    }

    public function categories(Request $request, $slug)
    {
        $settings = Settings::firstOrFail();
        $services = Services::all();
	$currentPath = $request->url();

        if ($slug == "all") {
            $products = Product::all();
            $allcategories = Category::get();
            $categories = Category::roots()->get();
            $tree = Category::getTreeHP($categories);
            $staticpages = StaticPage::all();

            $data = ["path" => $currentPath,"products" => $products, "services" => $services, "staticpages" => $staticpages, "settings" => $settings, "tree" => $tree, "categories" => $categories, "allcategories" => $allcategories];
            return view('main.categories')->with($data);
        } else {
            $category = Category::where('slug', '=', $slug)->first();
            $products = Product::where('category', '=', $category->id)->get();
        }

        $sliders = Sliders::where('category_id', '=', $category->id)->get();
        $allcategories = Category::get();
        $categories = Category::roots()->get();
        $tree = Category::getTreeHP($categories);
        $staticpages = StaticPage::all();
        $data = ["path" => $currentPath, "category" => $category, "sliders" => $sliders, "products" => $products, "services" => $services, "staticpages" => $staticpages, "settings" => $settings, "tree" => $tree, "categories" => $categories, "allcategories" => $allcategories];
        return view('main.categories')->with($data);
    }

}
