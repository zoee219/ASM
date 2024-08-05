<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeVanZoeController extends Controller
{
    public function thongTin()
    {
        $products = [
            [
                'id'   => '1',
                'name' => 'Nguyễn Văn A',
                'msv' => 'ph43454',
                'sdt' => '0958448643'
            ],
            [
                'id'   => '2',
                'name' => 'Lê Văn D',
                'msv' => 'ph43465',
                'sdt' => '0974675662'
            ],

        ];
        return view('thongtinsv')->with([
            'products' => $products,
        ]);
    }
}
