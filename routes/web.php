<?php

use Illuminate\Support\Facades\Route;


Route::get('member', 'backend\DashboardController@member')->name('Backend.Member');
Route::get('member/profile', 'backend\DashboardController@Profile')->name('Backend.Profile');
Route::get('member/password-update', 'backend\DashboardController@passwordUpdate')->name('Backend.passwordUpdate');
Route::get('member/transaction-update', 'backend\DashboardController@transactionUpdate')->name('Backend.transactionUpdate');


Route::get('member/myteam', 'backend\DashboardController@myteam')->name('Backend.Myteam');
Route::get('member/withdrow', 'backend\DashboardController@withdrow')->name('Backend.Withdrow');
Route::get('member/fund', 'backend\DashboardController@fund')->name('Backend.Fund');
Route::get('member/office-fund', 'backend\DashboardController@officeFund')->name('Backend.officeFund');
Route::get('member/board-achieve-list', 'backend\DashboardController@boardAchieveList')->name('Backend.boardAchieveList');
Route::get('member/founder-list', 'backend\DashboardController@founderList')->name('Backend.founderList');
Route::get('member/sponsor-list', 'backend\DashboardController@sponsorList')->name('Backend.sponsorList');
Route::get('member/sponsore-income', 'backend\DashboardController@sponsoreIncome')->name('Backend.sponsoreIncome');
Route::get('member/matching-income', 'backend\DashboardController@matchingIncome')->name('Backend.matchingIncome');
Route::get('member/matching-royalty-income', 'backend\DashboardController@matchingRoyaltyIncome')->name('Backend.matchingRoyaltyIncome');
Route::get('member/achiever-royalty-income', 'backend\DashboardController@achieverRoyaltyIncome')->name('Backend.achieverRoyaltyIncome');

Auth::routes();

Route::get('/', 'fontend\SiteController@home')->name('Fontend.Home');
Route::get('news', 'fontend\SiteController@news')->name('Fontend.News');
Route::get('news-details', 'fontend\SiteController@newsDetails')->name('Fontend.newsDetails');
Route::get('business', 'fontend\SiteController@business')->name('Fontend.Business');
Route::get('about', 'fontend\SiteController@about')->name('Fontend.About');
Route::get('contact', 'fontend\SiteController@contact')->name('Fontend.Contact');

Route::get('forgotten',function(){
    return view('auth.forgotten');
});

