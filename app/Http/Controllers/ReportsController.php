<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{
    public function index(){

        $projects = Project::all();
        $payments_count = Payment::where('status', '1')->count();
        $payments = Payment::where('status', '1')->get();
        $loop = 1;

            if ($payments_count < 1){
            $payments_array = null;
            goto skip;
            }
            
            foreach($payments as $payment){
                
                $id_p = $payment->project_id; 
                $payments_array[$id_p][$loop] = $payment->amount;
                $loop++;
            }
            skip:
        return view('repost.reports',[

            "title" => 'Reports',
             "projects" => $projects,
             "payments_data" => $payments_array
             

        ]);
    }
    public function TransactionSalary()
    {
        return view('repost.transaction-salary',[
            "title" => 'Transaction Salary'
        ]);
    }
    public function TransactionPorject()
    {
        return view('repost.transaction-project',[
            "title" => 'Transaction Project'
        ]);
    }
}