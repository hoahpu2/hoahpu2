<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::all();
        return view('admin.Order.index')->with(['body' => 'hold-transition skin-blue sidebar-mini', 'order' => $order,'dashbroard' => 'Quan ly don hang' , 'home' => 'Quan ly don hang', 'home1' => 'danh sach don hang']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Order.add')->with(['body' => 'hold-transition skin-blue sidebar-mini','dashbroard' => 'Quan ly don hang' , 'home' => 'Quan ly don hang', 'home1' => 'Them moi don hang']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'file' => 'mimes:jpeg,png,jpg',
            ],
            [
                'file.mimes' => 'file nhap k hop le',
            ]
        );

        $file_name = $request->file('file')->getClientOriginalExtension();
        $file_names = str_random(10).'.'.$file_name;
        $request->file('file')->move('resources/upload/order/',$file_names);
        $order = new Order;
        $order->tracking_code  = $request->madon;
        $order->recipient_name = $request->hoten;
        $order->address        = $request->diachi;
        $order->phone          = $request->sdt;
        $order->package_name   = $request->tengoihang;
        $order->deposit        = $request->deposit;
        $order->cod            = $request->cod;
        $order->image_order    = $file_names;
        $order->status         = 1;
        $order->save();
        return redirect()->route('order.index')->with(['body' => 'hold-transition skin-blue sidebar-mini']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd(13);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        return view('admin.Order.edit')->with(['order'=>$order, 'body' => 'hold-transition skin-blue sidebar-mini','dashbroard' => 'Quan ly don hang' , 'home' => 'Quan ly don hang', 'home1' => 'Sua don hang']);
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
        $this->validate($request,
            [
                'file' => 'mimes:jpeg,png,jpg',
            ],
            [
                'file.mimes' => 'file nhap k hop le',
            ]
        );

        $order = Order::find($id);

        if(!empty($request->file('file'))){
            $file_name = $request->file('file')->getClientOriginalExtension();
            $file_names = str_random(10).'.'.$file_name;
            $request->file('file')->move('resources/upload/order/',$file_names);
        } else $file_names = $order->image_order;
        
        $order->tracking_code  = $request->madon;
        $order->recipient_name = $request->hoten;
        $order->address        = $request->diachi;
        $order->phone          = $request->sdt;
        $order->package_name   = $request->tengoihang;
        $order->deposit        = $request->deposit;
        $order->cod            = $request->cod;
        $order->image_order    = $file_names;
        $order->status         = $request->status;
        $order->save();
        return redirect()->route('order.index')->with(['body' => 'hold-transition skin-blue sidebar-mini']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect()->route('order.index')->with(['body' => 'hold-transition skin-blue sidebar-mini']);
    }
}
