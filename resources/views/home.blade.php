@extends('layouts.app')

@section('content')
<script>
  $("body").on("click", "#generate", function(){
    $.get("{{ route('generate') }}", function(t){
      $("#name").text(t["name"]);
      $("#address").text(t["address"]);
    });
  });

  $("body").on("click", "#save", function(){
    $.post("{{ route('save') }}", { "_token": "{{ csrf_token() }}", "name": $("#name").text(), "address": $("#address").text() });
  });
</script>
<div class="container justify-content-center">
  <button type="button" id="generate" class="btn btn-warning" style="margin-bottom:10px">Generate</button>
   <button type="button" id="save" class="btn btn-success" style="float:right">Save</button>
<div id="tablo">
<table class="container">

	<tbody>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>

    @endif
		<tr>
			<td>Name</td>
			<td><span id="name">{{$data->name}}</span></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><span id="address">{{$data->address}}</span></td>
		</tr>
		<tr>
			<td>Amazon</td>
			<td>4162</td>
		</tr>
    <tr>
			<td>LinkedIn</td>
			<td>3654</td>
		</tr>
    <tr>
			<td>CodePen</td>
			<td>2002</td>

		</tr>
    <tr>
			<td>GitHub</td>
			<td>4623</td>
		</tr>
	</tbody>
</table>
</div>
</div>
@endsection
