<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Transaction;
use Auth;

class TransactionController extends Controller
{
    public function insertTransaction(Request $request){
        $userId = auth()->user()->id;
        $kodeTransaksi = $request->kode_transaksi;
        $templateId = $request->template_id;
        $pembayaran = $request->pembayaran;

        $dataSave = Transaction::create([
            'user_id' => $userId,
            'kode_transaksi' => $kodeTransaksi,
            'template_id' => $templateId,
            'pembayaran' => $pembayaran,
        ]);
        return $dataSave;
    }

    public function updateTransaction(Request $request){
        $userId = auth()->user()->id;
        $kodeTransaksi = $request->kode_transaksi;
        $templateId = $request->template_id;
        $pembayaran = $request->pembayaran;

        $dataSave = Transaction::where($request->id)->update([
            'user_id' => $userId,
            'kode_transaksi' => $kodeTransaksi,
            'template_id' => $templateId,
            'pembayaran' => $pembayaran,
        ]);
        return $dataSave;
    }
    //
}
