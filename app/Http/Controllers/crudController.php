<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Input;
use Illuminate\Support\Facades\Input;
use Request;
use DB;
use Session;
class crudController extends Controller
{
    //
    public function insertData(Request $request){
        $data = Request :: except('_token');
        $tbl = decrypt($data['tbl']);
        unset($data['tbl']);
        $data['created_at']= date('Y-m-d H:i:s');

        if(Request:: has('social')){
            $data['social']= implode(',',$data['social']);
            
            
        }
        if(Request:: hasFile('image')){
            $data['image']= $this->uploadimage($tbl,$data['image']);
            
            
        }
        // conversion of array category_id to string in addposts field.
        if(Request::has('category_id')){
            $data['category_id'] = implode(',',$data['category_id']);
        }

        DB::table($tbl)->insert($data);
        if($tbl == 'messages'){
            session :: flash('message','Thank You For Messaging us.We Will Get back to u shortly');

        }else{
            session :: flash('message','Data Successfully Inserted');
            

        }
        return redirect()->back();
       
    }
    public function updateData(){
        $data = Request :: except('_token');
        $tbl = decrypt($data['tbl']);
        unset($data['tbl']);
        $data['updated_at']= date('Y-m-d H:i:s');
        if(Request:: has('social')){
            $data['social']= implode(',',$data['social']);
            
            
        }
        if(Request:: hasFile('image')){
            $data['image']= $this->uploadimage($tbl,$data['image']);
            
            
        }
        if(Request::has('category_id')){
            $data['category_id'] = implode(',',$data['category_id']);
        }

        DB::table($tbl)->where(key($data),reset($data))->update($data);
        session :: flash('message','Data Successfully Updated');
        return redirect()->back();
    }
    public function uploadimage($location,$imagename){
    $name = $imagename->getClientOriginalName();
    $imagename->move(public_path().'/'.$location,date('ymdgis').$name);
   
    return date('ymdgis').$name;
    }
}
