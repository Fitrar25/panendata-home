<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\package;


class ordercontroller extends Controller
{
    public function store(Request $request){
        $order = order::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'objek' => $request->objek,
            'package_id' => $request->package_id,
            'dp' => $request->dp,
            'total' => $request->total,
            'status' => $request->status
        ]);

        //back to index

    return redirect()->back();
    }
}
