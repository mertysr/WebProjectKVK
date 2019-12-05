@extends('layouts.app')

@section('content')
<script>
  $("body").on("click", "#generate", function(){
    $.get("{{ route('generate') }}", function(t){
      $("#name").text(t["name"]);
      $("#address").text(t["address"]);
      $("#phoneNumber").text(t["phoneNumber"]);
      $("#company").text(t["company"]);
      $("#jobTitle").text(t["jobTitle"]);
      $("#email").text(t["email"]);
      $("#companyEmail").text(t["companyEmail"]);
      $("#password").text(t["password"]);
      $("#ipv4").text(t["ipv4"]);
      $("#localIpv4").text(t["localIpv4"]);
      $("#ipv6").text(t["ipv6"]);
      $("#macAddress").text(t["macAddress"]);
      $("#userAgent").text(t["userAgent"]);
      $("#namecard").text(t["name"]);
      $("#creditCardNumber").text(t["creditCardNumber"]);
      $("#secureNumber").text(t["secureNumber"]);
      $("#creditCardExpirationDateString").text(t["creditCardExpirationDateString"]);
    });
  });

  $("body").on("click", "#save", function(){
    $.post("{{ route('save') }}", { "_token": "{{ csrf_token() }}", "name": $("#name").text(), "address": $("#address").text(), "phoneNumber": $("#phoneNumber").text(),
      "company": $("#company").text(),"jobTitle": $("#jobTitle").text(),"email": $("#email").text(),"companyEmail": $("#companyEmail").text(),"password": $("#password").text(),
      "ipv4": $("#ipv4").text(),"localIpv4": $("#localIpv4").text(),"ipv6": $("#ipv6").text(),"macAddress": $("#macAddress").text(),
      "userAgent": $("#userAgent").text(),"creditCardNumber": $("#creditCardNumber").text(),"secureNumber": $("#secureNumber").text(),"creditCardExpirationDateString": $("#creditCardExpirationDateString").text(),
   });
  });
</script>




<div class="container">

  <ul class="responsive-table">
    <button type="button" id="generate" class="btn btn-warning" style="margin-bottom:10px">Generate</button>
     <button type="button" id="save" class="btn btn-success" style="float:right">Save</button>
    <li class="table-row">
      <div class="col-md-6">
        Name
      </div>
      <div class="col-md-6">
        <span id="name">{{$data->name}}</span>
      </div>
    </li>
    <li class="table-row">
      <div class="col-md-6">
        Adress
      </div>
      <div class="col-md-6">
        <span id="address">{{$data->address}}</span>
      </div>
    </li>
    <li class="table-row">
      <div class="col-md-6">
        Phone number
      </div>
      <div class="col-md-6">
        <span id="phoneNumber">{{$data->phoneNumber}}</span>
      </div>
    </li>
    <li class="table-row">
      <div class="col-md-6">
        Company
      </div>
      <div class="col-md-6">
        <span id="company">{{$data->company}}</span>
      </div>
    </li>
    <li class="table-row">
      <div class="col-md-6">
        Job Title
      </div>
      <div class="col-md-6">
        <span id="jobTitle">{{$data->jobTitle}}</span>
      </div>
    </li>
    <li class="table-row">
      <div class="col-md-6">
        Email address
      </div>
      <div class="col-md-6">
        <span id="email">{{$data->email}}</span>
      </div>
    </li>
    <li class="table-row">
      <div class="col-md-6">
        Company email address
      </div>
      <div class="col-md-6">
        <span id="companyEmail">{{$data->companyEmail}}</span>
      </div>
    </li>
    <li class="table-row">
      <div class="col-md-6">
        Password
      </div>
      <div class="col-md-6">
        <span id="password">{{$data->password}}</span>
      </div>
    </li>
    <li class="table-row">
      <div class="col-md-6">
        IPV4
      </div>
      <div class="col-md-6">
        <span id="ipv4">{{$data->ipv4}}</span>
      </div>
    </li>
    <li class="table-row">
      <div class="col-md-6">
        Local IPV4
      </div>
      <div class="col-md-6">
        <span id="localIpv4">{{$data->localIpv4}}</span>
      </div>
    </li>
    <li class="table-row">
      <div class="col-md-6">
        IPV6
      </div>
      <div class="col-md-6">
        <span id="ipv6">{{$data->ipv6}}</span>
      </div>
    </li>
    <li class="table-row">
      <div class="col-md-6">
        MAC Address
      </div>
      <div class="col-md-6">
        <span id="macAddress">{{$data->macAddress}}</span>
      </div>
    </li>
    <li class="table-row">
      <div class="col-md-6">
        User agent
      </div>
      <div class="col-md-6">
        <span id="userAgent">{{$data->userAgent}}</span>
      </div>
    </li>
    <li class="table-row">
      <div class="col-md-6">
        Credit Card
      </div>
      <div class="col-md-6">

<div class="ccard">
  <div class="ccard__front ccard__part">
    <img class="ccard__front-square ccard__square" src="https://image.ibb.co/cZeFjx/little_square.png">
    <img class="ccard__front-logo ccard__logo" src="https://www.fireeye.com/partners/strategic-technology-partners/visa-fireeye-cyber-watch-program/_jcr_content/content-par/grid_20_80_full/grid-20-left/image.img.png/1505254557388.png">
    <p class="ccard_numer"><span id="creditCardNumber">
      @php
        $datas=str_split($data->creditCardNumber,4);
        echo $datas[0]." ".$datas[1]." ".$datas[2]." ".$datas[3];
      @endphp


    </span></p>
    <div class="ccard__space-75">
      <span class="ccard__label">Card holder</span>
      <p class="ccard__info"><span id="namecard">{{$data->name}}</span></p>
    </div>
    <div class="ccard__space-25">
      <span class="ccard__label">Expires</span>
            <p class="ccard__info"><span id="creditCardExpirationDateString">{{$data->creditCardExpirationDateString}}</span></p>
    </div>
  </div>

  <div class="ccard__back ccard__part">
    <div class="ccard__black-line"></div>
    <div class="ccard__back-content">
      <div class="ccard__secret">
        <p class="ccard__secret--last"><span id="secureNumber">{{$data->secureNumber}}</span></p>
      </div>
      <img class="ccard__back-square ccard__square" src="https://image.ibb.co/cZeFjx/little_square.png">
      <img class="ccard__back-logo ccard__logo" src="https://www.fireeye.com/partners/strategic-technology-partners/visa-fireeye-cyber-watch-program/_jcr_content/content-par/grid_20_80_full/grid-20-left/image.img.png/1505254557388.png">

    </div>
  </div>

</div>
      </div>
    </li>
  </ul>
</div>





@endsection
