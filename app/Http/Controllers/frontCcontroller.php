<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class frontCcontroller extends Controller
{
    public function __construct(){

        $categories = DB::table('categories')->where('status','on')->get();
        $settings = DB ::table('settings')->first();
        if($settings){
            $settings->social = explode(',',$settings->social);
            foreach($settings->social as $social){
                $icon = explode('.',$social);
                $icon =$icon [1];
                $icons[] = $icon;
            }
            
            
        }else{
            $icons=[];
        }
        
        $lastnews = DB::table('posts')->where('status','publish')->orderby('pid','DESC')->first();
        $pages = DB::table('pages')->where('status','publish')->get();
        $leaderboard = DB::table('advertisements')->where('status','display')->where('location','leaderboard')->orderby('aid','DESC')->first();
        $sidebarTop = DB::table('advertisements')->where('status','display')->where('location','sidebar-top')->orderby('aid','DESC')->first();

        $sidebarBottom = DB::table('advertisements')->where('status','display')->where('location','sidebar-bottom')->orderby('aid','DESC')->first();

        view()->share([
            'categories' => $categories,
            'settings' => $settings,
            'icons' => $icons,
            'lastnews' => $lastnews,
            'pages' => $pages,
            'leaderboard' =>$leaderboard,
            'sidebarTop' =>$sidebarTop,
            'sidebarBottom' =>$sidebarBottom,

        ]);
    }
    public function index(){
        // $featured = DB::table('posts')->where('category_id','LIKE','%9%')->orderby('pid','DESC')->get();
        $politics = DB::table('posts')->where('category_id','LIKE','%1%')->orderby('pid','DESC')->get();
        $business = DB::table('posts')->where('category_id','LIKE','%2%')->orderby('pid','DESC')->get();
        $entertainment = DB::table('posts')->where('category_id','LIKE','%3%')->orderby('pid','DESC')->get();
        $technology = DB::table('posts')->where('category_id','LIKE','%4%')->orderby('pid','DESC')->get();
        $sports = DB::table('posts')->where('category_id','LIKE','%5%')->orderby('pid','DESC')->get();
        $travel = DB::table('posts')->where('category_id','LIKE','%6%')->orderby('pid','DESC')->get();
        $style = DB::table('posts')->where('category_id','LIKE','%7%')->orderby('pid','DESC')->get();
        $health = DB::table('posts')->where('category_id','LIKE','%8%')->orderby('pid','DESC')->get();        
        $featured = DB::table('posts')->where('category_id','LIKE','%9%')->orderby('pid','DESC')->get();
        $general = DB::table('posts')->where('category_id','LIKE','%10%')->orderby('pid','DESC')->get();
        $opinion = DB::table('posts')->where('category_id','LIKE','%11%')->orderby('pid','DESC')->get();
        $blog = DB::table('posts')->where('category_id','LIKE','%12%')->orderby('pid','DESC')->get();
        $international = DB::table('posts')->where('category_id','LIKE','%13%')->orderby('pid','DESC')->get(); 
       
        return view ('index',['featured'=>$featured,'general'=>$general,'politics'=>$politics,'business'=>$business,'entertainment'=>$entertainment,'technology'=>$technology,'sports'=>$sports,'opinion'=>$opinion, 'travel'=>$travel,    'style'=>$style,'health'=>$health,'blog'=>$blog,'international'=>$international,]);
    }
    public function category($slug){
        $cat = DB::table('categories')->where('slug',$slug)->first();
        $posts = DB::table('posts')->where('category_id','LIKE','%'.$cat->cid.'%')->get();
        $latest = DB::table('posts')->where('status','publish')->orderby('pid','DESC')->get();
        return view ('category',['posts'=>$posts,'cat'=>$cat,'latest'=>$latest]);
    }

    public function article($slug){
        $data = DB::table('posts')->where('slug',$slug)->first();
        $views = $data->views;
        DB::table('posts')->where('slug',$slug)->update(['views'=>$views + 1]);
        $category = explode(',',$data->category_id);
        $category = $category[0];
        $related = DB::table('posts')->where('category_id','LIKE','%'.$category.'%')->get();
        $latest = DB::table('posts')->where('status','publish')->orderby('pid','DESC')->get();
        return view ('article',['data'=>$data, 'related'=>$related, 'latest'=>$latest]);
    }
    public function page($slug){
        $data = DB::table('pages')->where('slug',$slug)->first();
         $latest = DB::table('posts')->where('status','publish')->orderby('pid','DESC')->get();
        // print_r($data);
        // exit();
        return view('page',['data'=>$data,'latest'=>$latest]);
    }

    public function contactUs(){
        $latest = DB::table('posts')->where('status','publish')->orderby('pid','DESC')->get();

        return view('contact',['latest'=>$latest]);
    }


    public function searchContent(){
        $url = 'http://localhost/newspaper/article';
        $text = $_GET['text'];
        $data = DB::table('posts')->where('title','LIKE','%'.$text.'%')->orwhere('description','LIKE','%'.$text.'%')->get();
        $output = '';
        
        echo '<ul class="search-result">';
        if(count($data)>0){
        foreach($data as $d){
            echo '<li><a href="'.$url.'/'.$d->slug.'">'.$d->title.'</a></li>';
        }
    }else{
            echo '<li>Sorry! No Data Found.</li>';

        }
        echo '</ul>';
        return $output;
    }
}
