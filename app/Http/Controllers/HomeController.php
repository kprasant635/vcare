<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {

        return view('dashboard');
    }
    public function home()
    {
        $product = Product::all();
        return view('index', compact('product'));
    }

    public function view_contact()
    {
        $contact = Contact::all();
        return view('contact.contact', compact('contact'));
    }
    public function contact_insert(Request $request)
    {
        $insert_queries = new Contact();
        $insert_queries->name = $request->name;
        $insert_queries->email = $request->email;
        $insert_queries->phone = $request->phone;
        $insert_queries->queries = $request->desc;
        $insert_queries->save();
        return redirect()->back();
    }
    function load_data(Request $request)
    {
        if ($request->ajax()) {
            if ($request->id > 0) {
                $data = DB::table('products')
                    ->where('id', '<', $request->id)
                    ->orderBy('id', 'DESC')
                    ->limit(4)
                    ->get();
            } else {
                $data = DB::table('products')
                    ->orderBy('id', 'DESC')
                    ->limit(4)
                    ->get();
            }
            $output = '';
            $last_id = '';

            if (!$data->isEmpty()) {
                foreach ($data as $row) {
                    $output .= '
       

            <div class="col-md-3 mb-2">
				<div class="card responsive-card">
					<img src="images/' . $row->image . '" width="100%">
					<h2 class="main_price "><a href=""> ' . $row->product_title . '</a></h2>
					<a href="#" class="price">£' . $row->price . '</a>
					<button class="btn product-btn">Buy Now</button>

				</div>
			</div>
            <br>
        ';
                    $last_id = $row->id;
                }
                $output .= '
     
        <button type="button" name="load_more_button" class="btn btn-success form-control" data-id="' . $last_id . '" id="load_more_button">Load More</button>
     
       ';
            } else {
                $output .= '
       
        <button type="button" name="load_more_button" class="btn btn-info form-control">No Data Found</button>
      
       ';
            }
            echo $output;
        }
    }
}
