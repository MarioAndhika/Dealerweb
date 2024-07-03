<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    function index()
    {
        // Mendapatkan semua transaksi dengan total harga mobil
        $transactions = Transaction::with('car')->get();

        // Menghitung total harga dari semua mobil dalam transaksi
        $totalSold = $transactions->sum(function ($transaction) {
            return $transaction->car->price ?? 0;
        });

        return view('admin.dashboard', [
            'title' => 'Dashboard',
            'pengguna' => User::where('role', '!=', 'Admin')->get()->count(),
            'terjual' =>  $totalSold,
            'transaksi' => Transaction::where('status', '!=', 'Pending')->get()->count(),
            'pending' => Transaction::where('status', 'Pending')->get()->count(),
            'allTrx' => Transaction::with(['user', 'car'])->get()
        ]);
    }

    function edit($id)
    {
        $transaction = Transaction::with(['user', 'car'])->where('id', $id)->first();
        abort_if(!$transaction, 404);

        return view('admin.edit', [
            'title' => 'Edit Kategori',
            'trx' => $transaction
        ]);
    }

    function process(Request $request, $id)
    {
        $transaction = Transaction::where('id', $id)->first();
        abort_if(!$transaction, 404);

        try {
            $transaction->update([
                'status' => $request->status
            ]);
            return redirect()->to(route('Admin.Dashboard'))->with('success', 'Transaksi diperbarui!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('success', 'Sisi server!');
        }
    }

    function delete($id)
    {
        $transaction = Transaction::where('id', $id)->first();
        abort_if(!$transaction, 404);

        try {
            $transaction->delete();
            return redirect()->to(route('Admin.Dashboard'))->with('success', 'Transaksi dihapus!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('success', 'Sisi server!');
        }
    }
}
