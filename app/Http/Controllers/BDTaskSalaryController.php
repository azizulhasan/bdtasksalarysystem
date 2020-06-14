<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BDTaskSalary;
class BDTaskSalaryController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('bdtasksalary');
    }

     public function store(Request $request){
        
            $totalSalary=$request->monthly_salary;
            $provident_fund=$request->provident_fund;
            $provident_fund= ($provident_fund/100)*$totalSalary;


            $insurance=$request->insurance;
            $insurance=$request->insurance/12;


            $profit_share=$request->profit_share;
            $profit_amount=$request->profit_amount;
            $team_member=$request->team_member;
            $profit = ((($profit_share/100)*$profit_amount)/$team_member)/12;


            $salaryMonthly = ($totalSalary+$profit)-($provident_fund+$insurance);
            


            $friday_holiday=$request->friday_holiday;
            $month_days=$request->month_days;
            $per_day_hour=$request->per_day_hour;


            $workDays =$month_days - $friday_holiday  ;
           

            $per_hour_rate = $salaryMonthly/($workDays*$per_day_hour);
            

            $data = [
                'monthly_salary' => $totalSalary, 
                'provident_fund' => $provident_fund, 
                'insurance' => $insurance, 
                'profit_amount' => $profit, 
                'work_days' => $workDays, 
                'per_day_hour' => $per_day_hour, 
                'total_amount_monthly' => $salaryMonthly, 
                'per_hour_rate' => $per_hour_rate 
                
            ];
            $id = BDTaskSalary::insertGetId($data);

            if($id!=""){
                echo "Your Data is submited for review";
            }else{
                echo "something went wrong";
            }


            


    }
   
}
