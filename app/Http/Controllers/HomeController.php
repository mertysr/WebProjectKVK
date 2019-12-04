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
        $data->phoneNumber = $faker->phoneNumber;
        $data->company = $faker->company;
        $data->jobTitle = $faker->jobTitle;
        $data->email = $faker->email;
        $data->companyEmail = $faker->companyEmail;
        $data->password = $faker->password;
        $data->ipv4 = $faker->ipv4;
        $data->localIpv4 = $faker->localIpv4;
        $data->ipv6 = $faker->ipv6;
        $data->macAddress = $faker->macAddress;
        $data->userAgent = $faker->userAgent;
        $data->cardNumber = str_split(rand(1000000000000000, 9999999999999999),4);
      }
      //$phoneNumber['phoneNumber']=Faker::PhoneNumber.phone_number_with_country_code;
      return view('home', ["data" => $data]);
    }
    public function generate(){
      $faker=Faker::create('lt_LT');
      //$phoneNumber['phoneNumber']=Faker::PhoneNumber.phone_number_with_country_code;
        return ["name" => $faker->name, "address" => $faker->address,"phoneNumber" => $faker->phoneNumber,
      "company" => $faker->company, "jobTitle" => $faker->jobTitle, "email" => $faker->email, "companyEmail" => $faker->companyEmail,
      "password" => $faker->password,"ipv4" => $faker->ipv4,"localIpv4" => $faker->localIpv4,"ipv6" => $faker->ipv6,
      "macAddress" => $faker->macAddress,"userAgent" => $faker->userAgent,"cardNumber" => str_split(rand(1000000000000000, 9999999999999999),4),

      ];
    }
    public function save(Request $request){
      $data = RandomData::updateOrCreate([
        "userId" => Auth::id()],[
        "userId" => Auth::id(),
        "name" => $request->get("name"),
        "address" => $request->get("address"),
        "phoneNumber" => $request->get("phoneNumber"),
        "company" => $request->get("company"),
        "jobTitle" => $request->get("jobTitle"),
        "email" => $request->get("email"),
        "companyEmail" => $request->get("companyEmail"),
        "password" => $request->get("password"),
        "ipv4" => $request->get("ipv4"),
        "localIpv4" => $request->get("localIpv4"),
        "ipv6" => $request->get("ipv6"),
        "macAddress" => $request->get("macAddress"),
        "userAgent" => $request->get("userAgent"),
        "cardNumber" => $request->get("cardNumber"),
      ]);
      return $data;
    }
    public function kaydet(){
      $random=new RandomData;
      $random->name=$faker->name;
    }
    public function control(){
        $faker=Faker::create('lt_LT');
    }
}
