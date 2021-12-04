<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;
use App\Http\Requests\MainCategoreRequest;
use App\Models\Brand;
use App\Models\MainCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = Brand::all();
        $main_cat = MainCategory::all();
        return \view('dashboard.brands.index',\compact('brand','main_cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand = Brand::all();
        $main_cat = MainCategory::all();
        return \view('dashboard.brands.create',\compact('brand','main_cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MainCategoreRequest $request)
    {

        try {

        if ($request->has('photo')) {


            $this->validate($request,[
                'photo'  =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            $image_full_name = ImageUpload($request->photo,'brand');


        }

        $brand = Brand::create($request->except('_token', 'photo'));



       $brand->name = $request->name;
       $brand->picture = $image_full_name;

       $brand->save();
       return redirect()->route('admin.brands')->with(['success' => 'تم ألاضافة بنجاح']);
    } catch (\Exception $ex) {

        return redirect()->route('admin.brands')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $main_cat = MainCategory::all();
       $brand = Brand::find($id);
       if (!$brand){
       return redirect()->route('admin.brands')->with(['error' => 'هذا القسم غير موجود ']);
        }

       return \view('dashboard.brands.show',\compact('brand','main_cat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $main_cat = MainCategory::all();
        $brand = Brand::find($id);
        if (!$brand){
            return redirect()->route('admin.brands')->with(['error' => 'هذا القسم غير موجود ']);
             }
        return \view('dashboard.brands.edit',\compact('brand','main_cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MainCategoreRequest $request, $id)
    {
        $brand = Brand::find($id);
        try {

            if ($request->has('photo')) {


                $this->validate($request,[
                    'photo'  =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
                ]);

                $image_url = ImageUpload($request->photo,'brand');
                Brand::where('id',$id)->update([
                    'picture'=>$image_url,
                ]);

            }

            $brand->update($request->except('_token', 'photo'));



           $brand->name = $request->name;


           $brand->save();
           return redirect()->route('admin.brands')->with(['success' => 'تم التعديل بنجاح']);
        } catch (\Exception $ex) {

            return redirect()->route('admin.brands')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            //get specific brands and its translations
            $brand = Brand::find($id);

            if (!$brand)
               { return redirect()->route('admin.brands')->with(['error' => 'هذا القسم غير موجود ']);}

            $brand->delete();

            return redirect()->route('admin.brands')->with(['success' => 'تم  الحذف بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.brands')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}
