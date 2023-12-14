<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;

class ExpenseController extends Controller
{
    //
    public function Index(){
         
        $expense =  Expense::orderby('id','desc')->get();
        return view('new.Expense', compact('expense'));
    }

    public function store(Request $request){

        if($request->editId){
            $data = Expense::find($request->editId);

            $data->type = $request->paymentType;
            $data->amount = $request->amount;
            $data->payment_date = $request->PaymentDate;
            $data->status = $request->status;
            $data->remarks = $request->remark;
            $data->save();

            return back()->with('s_success','Expense updated successfully !');
        }else{

        // Check if there are existing records
        $lastTransaction = Expense::max('transaction_id');

        // If there are no records, start with a default value
        $transactionId = $lastTransaction ? $lastTransaction + 1 : 100001;

        Expense::create([
                'transaction_id' => $transactionId,
                'type' => $request->paymentType,
                'amount' => $request->amount,
                'payment_date' => $request->PaymentDate,
                'status' => $request->status,
                'remarks' => $request->remark,
            ]);

        return back()->with('s_success','Expense created successfully !');

        }
    }

    public function fetchRecord($id){

        $record = Expense::find($id);

        return response()->json(['success' => true, 'data' => $record]);
    }


}
