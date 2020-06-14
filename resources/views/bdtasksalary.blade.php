@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="text-center text-white my-5 bg-primary">BDTask Salary System</h1>
            <form action="/" method="post" >
                                    @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="MonthlySalary">Monthly Salary</label>
                    <input type="number" name="monthly_salary" class="form-control" id="MonthlySalary" placeholder="Monthly Salary">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="ProvidentFund">Provident Fund</label>
                    <input type="number" name="provident_fund" class="form-control" id="ProvidentFund" placeholder="Provident Fund in %">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="InsurancePremium">Insurance Premium</label>
                    <input type="number" name="insurance" class="form-control" id="InsurancePremium" placeholder="Insurance Premium Yearly">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="ProfitShare">Profit Share</label>
                    <input type="number" name="profit_share" class="form-control" id="ProfitShare" placeholder="How much profit will share with team? in %">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="ProfitShareAmount">Profit Amount</label>
                    <input type="number" name="profit_amount" class="form-control" id="ProfitShareAmount" placeholder="Profit Amount">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="TeamMember">Team Member</label>
                    <input type="number" name="team_member" class="form-control" id="TeamMember" placeholder="How many member will get profit">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="TotalFridayHolidays">Total Friday And Holidays</label>
                    <input type="number" name="friday_holiday" class="form-control" id="TotalFridayHolidays" placeholder="How many days are off office in a month?">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="HoursPerDay">Hours Per Day</label>
                    <input type="number" name="per_day_hour" class="form-control" id="HoursPerDay" placeholder="Hours Per Day">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="Month_days">How Many Days On Calculated Month?</label>
                    <input type="number" name="month_days" class="form-control" id="Month_days" placeholder="Example 30/31/29">
                    </div>
                    
                </div>
                
                <button type="submit" class="btn btn-block btn-large btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
<!-- azizijgp_bdtasksalary -->