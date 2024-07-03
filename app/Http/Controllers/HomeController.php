<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $cars = [];
        if ($request->has('cat'))
            $cars = Category::where('name', 'like', '%' . $request->cat . '%')
            ->orWhere('slug', 'like', '%' . $request->cat . '%')->with('car')->get();
        else
            $cars = Category::with('car')->get();

        return view('home', [
            'cars' => $cars,
            'cat' => $request->has('cat')
        ]);
    }
    public function detail($slug)
    {
        return view('detail', [
            'car' => Car::where('slug', $slug)->with('category')->first()
        ]);
    }
    public function process(Request $request, $slug)
    {
        $car = Car::where('slug', $slug)->with('category')->first();
        abort_if(!$car, 404);

        try {

            $user = [];

            if (!Auth::user()->no_wa)
                $user['no_wa'] = $request->no_wa;

            if (!Auth::user()->address)
                $user['address'] = $request->address;

            User::find(Auth::user()->id)->update($user);

            Transaction::create([
                'user_id' => Auth::user()->id,
                'car_id' => $car->id,
                'checkout_date' => $request->checkout_date,
                'payment_method' => $request->payment_method,
                'status' => 'Pending'
            ]);

            return redirect()->back()->with('success', 'Data telah disimpan!. Pastikan mengambil mobil dan membawa uang sejumlah Rp ' . number_format($car->price, 0, ',', '.') . ' untuk menyelesaikan transaksi di cabang terdekat!');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Sisi Server!');
        }
    }
}
