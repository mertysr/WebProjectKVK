<?php

namespace App\Http\Controllers;
use App\Models\RandomData;
use Illuminate\Http\Request;
use Faker\Provider\en_US\PhoneNumber;
use Faker\Factory as Faker;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $faker=Faker::create('lt_LT');
      $data = RandomData::where("userId", Auth::user()->id)->first();
  if ( $data === NULL ){
    $data = collect();
        $data->name = $faker->name;
        $data->address = $faker->address;
      }
      //$phoneNumber['phoneNumber']=Faker::PhoneNumber.phone_number_with_country_code;
      return view('home', ["data" => $data]);
    }
    public function generate(){
      $faker=Faker::create('lt_LT');
      //$phoneNumber['phoneNumber']=Faker::PhoneNumber.phone_number_with_country_code;
        return ["name" => $faker->name, "address" => $faker->address];
    }
    public function save(Request $request){
      $data = RandomData::updateOrCreate([
        "userId" => Auth::id()],[
        "userId" => Auth::id(),
        "name" => $request->get("name"),
        "address" => $request->get("address")
      ]);
      return $data;
    }
    public function kaydet(){
      $random=new RandomData;
      $random->name=$faker->name;
    }
}
