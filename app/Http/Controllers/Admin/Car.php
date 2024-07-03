<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car as ModelsCar;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Car extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.car.index', [
            'title' => 'Mobil',
            'cars' => ModelsCar::with('category')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.car.create', [
            'title' => 'Tambah Mobil',
            'categories' => Category::all()
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
            'category_id' => 'required',
            'name' => 'required',
            'transmision' => 'required',
            'fuel' => 'required',
            'enggine' => 'required',
            'price' => 'required',
            'seat' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);

        $slug = Str::slug($request->name);
        if (ModelsCar::where('slug', $slug)->first())
            return redirect()->back()->with('error', 'Nama Mobil sudah dipakai ada!');

        $data = $request->except(['_token', 'files']);
        $data['slug'] = $slug;

        $namaFile = $slug . '-' . time() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('car'), $namaFile);
        $data['image'] = $namaFile;

        try {
            ModelsCar::create($data);
            return redirect()->back()->with('success', 'Mobil dibuat!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Sisi server: ' . $e->getMessage());
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
        $car = ModelsCar::where('slug', $slug)->first();
        abort_if(!$car, 404);

        return view('admin.car.edit', [
            'title' => 'Edit Kategori',
            'car' => $car,
            'categories' => Category::all()
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
            'category_id' => 'required',
            'name' => 'required',
            'transmision' => 'required',
            'fuel' => 'required',
            'enggine' => 'required',
            'price' => 'required',
            'seat' => 'required',
            'description' => 'required',
        ]);

        $slug = Str::slug($request->name);
        if (ModelsCar::where('slug', $slug)->where('id', '!=', $id)->first())
            return redirect()->back()->with('error', 'Nama Mobil sudah dipakai ada!');

        $car = ModelsCar::findOrFail($id);

        $data = $request->except(['_token', 'files']);
        $data['slug'] = $slug;

        if ($request->has('image')) {
            try {
                unlink(public_path($car->image));
            } catch (\Throwable $th) {
            }

            $namaFile = $slug . '-' . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('car'), $namaFile);
            $data['image'] = $namaFile;
        }

        try {
            $car->update($data);
            return redirect()->to(route('car.index'))->with('success', 'Mobil Diperbarui!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Sisi server: ' . $e->getMessage());
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
        $car = ModelsCar::findOrFail($id);

        try {
            $car->delete();
            return redirect()->to(route('car.index'))->with('success', 'Mobil Dihapus!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Sisi server');
        }
    }
}
