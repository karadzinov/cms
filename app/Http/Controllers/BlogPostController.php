<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException as QueryException;
use App\Http\Requests;
use App\Blog as Blog;
use App\Blogpost as Blogpost;
use App\Region as Region;
use App\User as User;
use App\Country as Country;
use App\Category as Category;
use App\Workflow as Workflow;
use App\Sourcepartner as Sourcepartner;
use Validator;
use Intervention\Image\ImageManagerStatic as Image;
use Input;
use Session;
use DB;

class BlogPostController extends Controller
{

    public function index()
    {

    }

    public function create(Request $request, $id)
    {

        $blog = Blog::FindOrFail($id);
        $sourcepartners = Sourcepartner::all();
        $users = User::all();
        $countries = Country::orderBy('name', 'asc')->get();
        $workflows = Workflow::orderBy('id', 'desc')->get();
        $data = ['blog' => $blog, 'sourcepartners' => $sourcepartners, 'countries' => $countries, 'users' => $users, 'workflows' => $workflows];

        return view('admin.createblogpost')->with($data);
    }

    public function store(Request $request)
    {


        $errors = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required',
            'image_o' => 'required',
        ]);

        if ($errors->fails()) {
            return redirect()->back()
                ->withErrors($errors)
                ->withInput();
        }


        $request['title'] = strip_tags($request['title']);
        $request['subtitle'] = strip_tags($request['subtitle']);

        $request['slug'] = str_slug($request['title']);

        $slug = Blogpost::where('slug', 'like', $request['slug'] . '%')->get();

        (int)$count = count($slug);


        if ($count > 0)
            $request['slug'] = $request['slug'] . '-' . $count;


        $input = $request->all();


        if ($request->input('image_o')) {

            $image = $request->input('image_o');
            $path = public_path() . '/assets/img/blogpost/';
            $pathThumb = public_path() . '/assets/img/blogpost/thumbnails/';
            $pathMedium = public_path() . '/assets/img/blogpost/medium/';
            $path_parts = pathinfo($image);
            if ($count > 0) {
                $imageName = str_slug($input['title']) . '-' . $count . '.' . $path_parts['extension'];
            } else {
                $imageName = str_slug($input['title']) . '.' . $path_parts['extension'];
            }


            copy($image, $path . $imageName);

            $findimage = public_path() . '/assets/img/blogpost/' . $imageName;
            $imagethumb = Image::make($findimage)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            if ($request->input('cropedimage')) {
                $image_crop = $request->input('cropedimage');
                list($type, $image_crop) = explode(';', $image_crop);
                list(, $image_crop) = explode(',', $image_crop);
                $image_crop = base64_decode($image_crop);
                file_put_contents($pathMedium . $imageName, $image_crop);
                $imagemedium = $imageName;
                $input['imagemedium'] = $imagemedium;
            }

            $imagethumb->save($pathThumb . $imageName);


            $image = $request->imagethumb = $imageName;
            $imagethumb = $request->image = $imageName;
            $imagemedium = $request->image = $imageName;
        }


        $input['image'] = $image;
        $input['imagemedium'] = $imagemedium;
        $input['imagethumb'] = $imagethumb;


        try {

            $blog = Blogpost::create($input);
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if ($errorCode == 1062) {
                // unique error
                $rand = rand(50, 20);
                $input['slug'] = $request['slug'] . '-' . $rand;
                $blog = Blogpost::create($input);
            }
        }

        Session::flash('flash_message', 'Blogpost successfully created!');


        return redirect()->back();
    }

    public function edit($id)
    {

        $blogpost = Blogpost::FindOrFail($id);
        $sourcepartners = Sourcepartner::all();
        $users = User::all();
        $countries = Country::orderBy('name', 'asc')->get();
        $workflows = Workflow::orderBy('id', 'desc')->get();
        $data = ['blogpost' => $blogpost, 'sourcepartners' => $sourcepartners, 'countries' => $countries, 'users' => $users, 'workflows' => $workflows];

        return view('admin.editblogpost')->with($data);
    }

    public function update(Request $request)
    {

        $errors = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        if ($errors->fails()) {
            return redirect()->back()
                ->withErrors($errors)
                ->withInput();
        }
        $id = $request['id'];
        $blogpost = Blogpost::FindOrFail($id);

        $request['title'] = strip_tags($request['title']);
        $request['subtitle'] = strip_tags($request['subtitle']);


        $title = DB::table('blogposts')->select('title')->where('id', '=', $id)->get();

        $title = $title[0]->title;

        if ($title != $request['title']) {

            $request['slug'] = str_slug($request['title']);

            $slug = Blogpost::where('slug', 'like', $request['slug'] . '%')->get();

            (int)$count = count($slug);

            if ($count > 0)
                $request['slug'] = $request['slug'] . '-' . $count;
        }

        $input = $request->all();

        try {
            $blogpost->fill($input)->save();
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if ($errorCode == 1062) {

                // unique error
                $rand = rand(50, 20);
                $input['slug'] = $request['slug'] . '-' . $rand;
                $blogpost->fill($input)->save();
            }
        }


        $slug = DB::table('blogposts')->select('slug')->where('id', '=', $id)->get();

        $slugname = $slug[0]->slug;

        if ($request->input('image_o')) {

            $image = $request->input('image_o');
            $path = public_path() . '/assets/img/blogpost/';
            $pathThumb = public_path() . '/assets/img/blogpost/thumbnails/';
            $pathMedium = public_path() . '/assets/img/blogpost/medium/';
            $path_parts = pathinfo($image);


            $imageName = $slugname . '.' . $path_parts['extension'];

            copy($image, $path . $imageName);

            $findimage = public_path() . '/assets/img/blogpost/' . $imageName;
            $imagethumb = Image::make($findimage)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            if ($request->input('cropedimage')) {
                $image_crop = $request->input('cropedimage');
                list($type, $image_crop) = explode(';', $image_crop);
                list(, $image_crop) = explode(',', $image_crop);
                $image_crop = base64_decode($image_crop);
                file_put_contents($pathMedium . $imageName, $image_crop);
                $imagemedium = $imageName;
                $input['imagemedium'] = $imagemedium;
            }

            $imagethumb->save($pathThumb . $imageName);


            $image = $request->imagethumb = $imageName;
            $imagethumb = $request->image = $imageName;
            $imagemedium = $request->image = $imageName;


            $input['image'] = $image;
            $input['imagemedium'] = $imagemedium;
            $input['imagethumb'] = $imagethumb;
        }


        $blogpost->fill($input)->save();


        Session::flash('flash_message', 'Blogpost successfully edited!');

        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        $id = $request['id'];
        $blogpost = Blogpost::FindOrFail($id);
        // Delete blog images
        $image = public_path() . '/assets/img/blogpost/' . $blogpost->image;
        $imagemedium = public_path() . '/assets/img/blogpost/medium/' . $blogpost->image;
        $imagethumb = public_path() . '/assets/img/blogpost/thumbnails/' . $blogpost->image;

        unlink($image);
        unlink($imagemedium);
        unlink($imagethumb);


        $blogpost->delete();
        return redirect('/admin/blog');
    }

}