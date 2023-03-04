<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShipmentModel;

class Shipment extends Controller
{
    public function send(Request $request)
    {
        $data = new ShipmentModel([
            'market' => $request->get('market'),
            'invoice' => $request->get('invoice'),
            'courier' => $request->get('courier'),
            'awb' => $request->get('awb'),
            'customer' => $request->get('customer'),
            'order' => $request->get('order')
        ]);
        return view('shipment', compact('data'));
    }

    public function shipment(Request $request)
    {
        return view('shipment');
    }
}
