<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Project;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class DefaultController extends Controller
{
    public function index(){

        $categories=Category::all();

        $portfolioImages=collect();

        $limit = 6;

        foreach ($categories as $category) {
            $count = 0;
            foreach ($category->getMedia('image') as $media) {
                if ($count < $limit) {
                    $portfolioImages->push([
                        'slug' => $category->slug,
                        'image' => $media->getUrl()
                    ]);
                    $count++;
                } else {
                    break;
                }
            }
        }


        return view('index',[
            'sliders'=>Slider::all(),
            'projects'=>Project::orderBy('id','desc')->limit(10)->get(),
            'categories'=>$categories,
            'portfolioImages'=>$portfolioImages,
            'blogs'=>Blog::orderBy('id','desc')->limit(4)->get()


        ]);
    }
    public function about(){
        return view('about');
    }

    public function projects(){
        return view('projects',[
            'projects'=>Project::orderBy('id','desc')->paginate(12),
        ]);
    }


    public function projectDetail($id){
        return view('projectDetail',[
            'project'=>Project::findOrFail($id)
        ]);
    }
    public function blog(){
        return view('blog',[
            'blogs'=>Blog::paginate(10)
        ]);
    }
    public function blogDetail($id){
        return view('blogDetail',[
            'blog'=>Blog::findOrFail($id)
        ]);
    }

    public function serviceDetail($slug){

        return view('serviceDetail',[
            'service' => Service::where('slug',$slug)->fist()
        ]);
    }

    public function contact(){
        return view('contact');
    }
}
