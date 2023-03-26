<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
          [
            'name' => 'Basic', 
            'slug' => 'basic', 
            'stripe_plan' => 'price_1Mpw9yHlup9y4QK4e8gwlCE8', // This needs to be got from Stripe API ID for the Specific Product
            'price' => 10, 
            'description' => 'Basic'
          ],
          [
            
            'name' => 'Premium', 
            'slug' => 'premium', 
            'stripe_plan' => 'price_1MpwACHlup9y4QK4ppvBJy0Q', // This needs to be got from Stripe API ID for the Specific Product
            'price' => 100, 
            'description' => 'Premium'
          ]
        ];

        foreach($plans as $plan){
          Plan::create($plan);
        }
    }
}
