<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index(){
      $plans = Plan::query()->get();
      return view('plans', compact('plans'));
    }

    public function show(Plan $plan, Request $request){
      $intent = auth()->user()->createSetupIntent();
      return view('subscription', compact('intent', 'plan'));
    }

    public function subscription(Request $request){
      $plan = Plan::find($request->plan);
      $subscriptions = $request->user()->newSubscription($request->plan, $plan->stripe_plan)
      ->create($request->token);

      return view('subscription_success');
    }
}
