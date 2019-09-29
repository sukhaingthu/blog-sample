<?php
namespace App\Http\Controllers\Backend;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $category = Category::orderBy('id', 'desc')->paginate(5);
         return view('backend.category.index', compact('category'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $request->validate([
            'name'=>'required'
        ],
            [
                'name.required'=>'Please fill the name field'
            ]);

        Category::create($request->all());
        return redirect('admin/category')->with('status', 'Created Successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat=Category::findOrFail($id);
        return view('backend.category.edit',compact('cat'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       Category::findOrFail($id)->update($request->all());
       return redirect('admin/category')->with('status','Updated Successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
    {
         Category::findOrFail($id)->delete();
         return redirect('admin/category')->with('status','Deleted Successfully');
    }
}