<?php

namespace App\Http\Controllers;

use App\Referral;
use App\User;
use Illuminate\Http\Request;

class ReferralController extends Controller
{


    /**
     * Add a new referral record and update the referrer's bonus balance.
     *
     * @param Request $request The HTTP request containing 'referrer_id' and 'referred_id'.
     * @return \Illuminate\Http\JsonResponse A JSON response with the referral details and success message.
     */
    public function addReferral(Request $request)
    {


        $request->validate([
            'referrer_id' => 'required|exists:users,id',
            'referred_id' => 'required',
        ]);


        $referral = Referral::create($request->only('referrer_id', 'referred_id'));

        $referrer = User::find($request->referrer_id);
        $referrer->increment('bonus_balance', 25);
        return redirect()->route('home');
    }

    /**
     * Get referral statistics for a specific user.
     *
     * @param int $userId The ID of the user whose referral stats are requested.
     * @return \Illuminate\Http\JsonResponse A JSON response with the user's referral statistics.
     */
    public function getReferralStats($userId)
    {
        // Retrieve the user along with a count of their referrals. If not found, throw an exception.
        $user = User::withCount('referrals')->findOrFail($userId);

        // Return the user's name, email, referral count, and total bonus balance.
        return response()->json([
            'user' => $user->name,
            'email' => $user->email,
            'referral_count' => $user->referrals_count,
            'total_bonus' => $user->bonus_balance,
        ]);
    }
}
