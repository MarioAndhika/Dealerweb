<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category as ModelsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Category extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.category.index', [
            'title' => 'Kategori',
            'categories' => ModelsCategory::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create', [
            'title' => 'Tambah Kategori'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $slug = Str::slug($request->name);
        if (ModelsCategory::where('slug', $slug)->first())
            return redirect()->back()->with('error', 'Kategori sudah ada!');

        try {
            ModelsCategory::create([
                'slug' => $slug,
                'name' => $request->name
            ]);
            return redirect()->back()->with('success', 'Kategori dibuat!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Sisi server');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $category = ModelsCategory::where('slug', $slug)->first();
        abort_if(!$category, 404);

        return view('admin.category.edit', [
            'title' => 'Edit Kategori',
            'category' => $category
        ]);
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
        $request->validate([
            'name' => 'required'
        ]);

        $category = ModelsCategory::findOrFail($id);

        $slug = Str::slug($request->name);
        if (ModelsCategory::where('id', '!=', $id)->where('slug', $slug)->first())
            return redirect()->back()->with('error', 'Kategori sudah ada!');

        try {
            $category->update([
                'slug' => $slug,
                'name' => $request->name
            ]);
            return redirect()->to(route('category.index'))->with('success', 'Kategori Diperbarui!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Sisi server');
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
        $category = ModelsCategory::findOrFail($id);

        try {
            $category->delete();
            return redirect()->to(route('category.index'))->with('success', 'Kategori Dihapus!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Sisi server');
        }
    }
}
