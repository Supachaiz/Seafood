<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $view['product'] = DB::table('product')->get();
        return view('Main.product',$view);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        // echo "$r->data_id -- $r->user_id -- $r->amount";
        $w[0] = array('order_status',0);
        $w[1] = array('order_user',$r->user_id);
        $check = DB::table('order')->where($w)->count();
        if($check===0){
            $new_data['order_user'] = intval($r->user_id);
            $new_data['order_datetime'] = date('Y-m-d H:i:s');
            $new_data['order_shipping'] = '';
            $pcd_id = DB::table('order')->insertGetId($new_data);
        }else{
            $pcd = DB::table('order')->where($w)->first();
            $pcd_id = $pcd->order_id;
        }
        $w_list[0] = array('orderlist_orderid',$pcd_id);
        $w_list[1] = array('orderlist_productid',$r->data_id);
        $check_list = DB::table('orderlist')->where($w_list)->count();

        if($r->amount==0){
            DB::table('orderlist')->where($w_list)->delete();
        }else{
            $get_product = DB::table('product')->where('product_id',$r->data_id)->first();
            $data['orderlist_price'] = $get_product->product_price;
            $data['orderlist_amout'] = $r->amount;
            $data['orderlist_detail'] = '';
            if($check_list>0){
                DB::table('orderlist')->where($w_list)->update($data);
            }else{
                $data['orderlist_orderid']  = $get_product->product_id;
                $data['orderlist_productid']= $pcd_id;
                DB::table('orderlist')->insert($data);
            }
        }
        return 'success';
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
