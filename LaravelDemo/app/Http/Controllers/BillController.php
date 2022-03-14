<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index(){
        // $bills = all();
        //dd($bills);
        return view('bills.index');
    }

    public function bill (Request $request){
        $input = $request->all();
    }

    public function calculate_bill(Request $request) {
        $input = $request->all();
        $units = $input['units'];
        $unit_cost_first = 3.50;
        $unit_cost_second = 4.00;
        $unit_cost_third = 5.20;
        $unit_cost_fourth = 6.50;
    
        if($units <= 50) {
            $bill = $units * $unit_cost_first;
        }
        else if($units > 50 && $units <= 100) {
            $temp = 50 * $unit_cost_first;
            $remaining_units = $units - 50;
            $bill = $temp + ($remaining_units * $unit_cost_second);
        }
        else if($units > 100 && $units <= 200) {
            $temp = (50 * 3.5) + (100 * $unit_cost_second);
            $remaining_units = $units - 150;
            $bill = $temp + ($remaining_units * $unit_cost_third);
        }
        else {
            $temp = (50 * 3.5) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
            $remaining_units = $units - 250;
            $bill = $temp + ($remaining_units * $unit_cost_fourth);
        }
        $result_bill = number_format((float)$bill, 2, '.', '');
        return view('bills.index',compact('result_bill','units'));
        // return number_format((float)$bill, 2, '.', '');
    }
}

