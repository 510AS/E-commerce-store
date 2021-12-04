<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;
use App\Http\Requests\MainCategoreRequest;
use App\Models\Brand;
use App\Models\MainCategory;
use App\Models\SubCategory;
use Illuminate\Http\Request;


class MainCategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main_cat = MainCategory::all();
        $brand = Brand::all();
        return \view('dashboard.categories.index',\compact('brand','main_cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $main_cat = MainCategory::all();
        $brand = Brand::all();
        return \view('dashboard.categories.create',\compact('brand','main_cat'));
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

            $image_full_name = ImageUpload($request->photo,'category');


        }

        $category = MainCategory::create($request->except('_token', 'photo'));



       $category->name = $request->name;
       $category->picture = $image_full_name;

       $category->save();
       return redirect()->route('admin.maincategories')->with(['success' => 'تم ألاضافة بنجاح']);
    } catch (\Exception $ex) {

        return redirect()->route('admin.maincategories')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
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
       $main_cat = MainCategory::find($id);
       if (!$main_cat){
       return redirect()->route('admin.maincategories')->with(['error' => 'هذا القسم غير موجود ']);
        }
       $sub_cat = SubCategory::where('cat_id',$id);
       return \view('dashboard.categories.show',\compact('main_cat','sub_cat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $main_cat = MainCategory::find($id);
        $brand = Brand::all();
        if (!$main_cat){
            return redirect()->route('admin.maincategories')->with(['error' => 'هذا القسم غير موجود ']);
             }
        return \view('dashboard.categories.edit',\compact('brand','main_cat'));
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
        $main_cat = MainCategory::find($id);
        try {

            if ($request->has('photo')) {


                $this->validate($request,[
                    'photo'  =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
                ]);

                $image_url = ImageUpload($request->photo,'category');
                MainCategory::where('id',$id)->update([
                    'picture'=>$image_url,
                ]);

            }

            $main_cat->update($request->except('_token', 'photo'));



           $main_cat->name = $request->name;


           $main_cat->save();
           return redirect()->route('admin.maincategories')->with(['success' => 'تم التعديل بنجاح']);
        } catch (\Exception $ex) {

            return redirect()->route('admin.maincategories')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
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
            //get specific categories and its translations
            $main_cat = MainCategory::find($id);

            if (!$main_cat)
               { return redirect()->route('admin.maincategories')->with(['error' => 'هذا القسم غير موجود ']);}

            $main_cat->delete();

            return redirect()->route('admin.maincategories')->with(['success' => 'تم  الحذف بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.maincategories')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}
