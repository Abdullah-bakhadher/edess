<?php

namespace App\Http\Controllers;

use App\User;

class MainController extends Controller
{
    public function home()
    {


        // Get the authenticated user
        $user = auth()->user();

        // Count the total number of referrals linked to this user as the referrer
        $totalReferrals = $user->referrals()->count();

        // Calculate the total bonus for the user (assuming it is stored as a 'bonus_balance' in the 'users' table)
        $totalBonus = $user->bonus_balance;

        return view('pages/home', compact('user', 'totalReferrals', 'totalBonus'));
    }
    public function add_referral()
    {


        // Get the authenticated user
        $user = auth()->user();

        // Count the total number of referrals linked to this user as the referrer
        $totalReferrals = $user->referrals()->count();

        // Calculate the total bonus for the user (assuming it is stored as a 'bonus_balance' in the 'users' table)
        $totalBonus = $user->bonus_balance;

        return view('pages/add_referral', compact('user', 'totalReferrals', 'totalBonus'));
    }
    public function referral_statistics()
    {

        // Get all users
        $users = User::withCount('referrals')->get();

        // Pass users to the view
        return view('pages/referral_statistics', compact('users'));
    }
}
