<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    public function index()
    {
        $cars = [
            ["id"=>1,"brand"=>"Tesla","model"=>"Model S","price"=>89999, "image"=>"2025-tesla-model-s-1-672d42e172407.avif"],
            ["id"=>2,"brand"=>"BMW","model"=>"i4","price"=>69999, "image"=>"2026-bmw-i4-m60.avif"],
            ["id"=>3,"brand"=>"Mercedes","model"=>"EQE","price"=>75999, "image"=>"40876-Mercedes-BenzEQE350-1920x960.jpeg"],
            ["id"=>4,"brand"=>"Audi","model"=>"e-tron","price"=>82999, "image"=>"images-original-5118-EtronGT00000024-2.web"],
            ["id"=>5,"brand"=>"Volkswagen","model"=>"ID.4","price"=>45999, "image"=>"2026-vw-id4.avif"],
            ["id"=>6,"brand"=>"Volvo","model"=>"XC40 Recharge","price"=>51999, "image"=>"2026-volvo-xc40.avif"],
            ["id"=>7,"brand"=>"Hyundai","model"=>"Ioniq 5","price"=>42999, "image"=>"2026-hyundai-ioniq5.avif"],
            ["id"=>8,"brand"=>"Kia","model"=>"EV6","price"=>44999, "image"=>"kia-ev6.jpg"],
            ["id"=>9,"brand"=>"Ford","model"=>"Mustang Mach-E","price"=>55999, "image"=>"ford-mustang-mache.jpg"],
            ["id"=>10,"brand"=>"Nissan","model"=>"Ariya","price"=>39999, "image"=>"nissan-ariya.jpg"],
        ];

        return view('showroom', compact('cars'));
    }
}
