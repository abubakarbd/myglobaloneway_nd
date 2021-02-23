<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function member()
    {
        return view('backend.home');
    }
    public function myteam()
    {
        return view('backend.myteam');
    }
    public function withdrow()
    {
        return view('backend.withdrow');
    }
    public function fund()
    {
        return view('backend.fund');
    }
    public function officeFund()
    {
        return view('backend.office_fund');
    }
    public function boardAchieveList()
    {
        return view('backend.board_achieve_list');
    }
    public function founderList()
    {
        return view('backend.founder_list');
    }
    public function sponsorList()
    {
        return view('backend.sponsor_list');
    }
    public function sponsoreIncome()
    {
        return view('backend.sponsore_income');
    }
    public function matchingIncome()
    {
        return view('backend.matching_income');
    }
    public function matchingRoyaltyIncome()
    {
        return view('backend.matching_royalty_income');
    }
    public function achieverRoyaltyIncome()
    {
        return view('backend.achiever_royalty_income');
    }
    public function Profile()
    {
        return view('backend.profile');
    }
    public function passwordUpdate()
    {
        return view('backend.password_update');
    }
    public function transactionUpdate()
    {
        return view('backend.transaction_update');
    }
}
