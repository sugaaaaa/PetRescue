<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\PetCare;
use App\Models\PetGrooming;
use App\Models\PetParks;
use App\Models\Pets;
use App\Models\PetShop;
use App\Models\PetTreatment;
use App\Models\User;

class OverViewController extends Controller
{
    public function index()
    {
        $petCount = Pets::count();
        $blogCount = Blog::count();
        $petCareCount = PetCare::count();
        $userCount = User::count();
        $petGroomingCount = PetGrooming::count();
        $petShopCount = PetShop::count();
        $petParkCount = PetParks::count();
        $petTreatmentCount = PetTreatment::count();
        return view('/admin/adminDashboard/overView/index', compact('petCount', 'blogCount', 'petCareCount', 'userCount', 'petGroomingCount' , 'petShopCount' , 'petParkCount', 'petTreatmentCount'));
    }
    
}
