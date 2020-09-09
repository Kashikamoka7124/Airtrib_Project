<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
@extends('layouts.page')

@section('content')



<div class="content-wrapper">

<section class="content">
    <div class="row" style=" background-color: #E1EFD8; border: none; padding-top: 0px; ">

<div class="col-lg-12">
<div class="alerts-con"></div>

<div class="box"  >
<div class="box-header" style="background-color: #E1EFD8; padding:0">
  <h1>JOIN THE CORPORATE PROGRAM</h1>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <form id="myform" action="{{url('add_corporate')}}" method="post">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Corporation Name*</label>
        <input type="text" name="o_corporation_name" class="form-control" id="inputEmail4" placeholder="Name">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Type of Organization*</label>
        <select id="inputState" class="form-control" name="o_organization">
          @if(!is_null($organizations))
          @foreach ($organizations as $org_value)
          <option value="{{$org_value->id}}" selected>{{$org_value->name}}</option>
          @endforeach
          @endif
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Email*</label>
      <input type="email" name="o_email" class="form-control" id="inputAddress" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="inputAddress2">Confirm Email*</label>
      <input type="email" name="o_c_email" class="form-control" id="inputAddress2" placeholder="Confirm Email">
    </div>
    <div class="form-row">
      <div class="form-group col-md-2">
        <select id="inputgender" class="form-control" name="o_gender">
          <option value="1" selected>Mr</option>
          <option value="2">Mrs</option>
          <option value="3">Other</option>
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="inputCity">Conatct Name*</label>
        <input type="text" name="o_conatct_name" class="form-control" id="inputCity">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">Number Og tarvelling People</label>
        <input type="number" name="o_num_tra_people" class="form-control" id="inputnumeberpeople">
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">From</label>
        <input type="text" name="o_fcountry" class="form-control" id="inputZip">
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">To</label>
        <input type="text" name="o_tcountry" class="form-control" id="inputZip">
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Depart</label>
        <input type="date" name="o_ddate" class="form-control" id="inputZip">
        <!-- <select id="inputdepart" class="form-control" name="o_departure">
          @if(!is_null($countries))
          @foreach ($countries as $c_value)
          <option value="{{$c_value->id}}" selected>{{$c_value->name}}</option>
          @endforeach
          @endif
        </select> -->
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Return</label>
        <input type="date" name="o_rdate" class="form-control" id="inputZip">
        <!-- <select id="inputReturn" class="form-control" name="o_return">
          @if(!is_null($countries))
          @foreach ($countries as $c_value)
          <option value="{{$c_value->id}}" selected>{{$c_value->name}}</option>
          @endforeach
          @endif
        </select> -->
      </div>
    </div>
    <button type="submit" id="btn" class="btn btn-primary">Submit</button>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form>



  <a href="{{url('donation')}}"><button type="button" class="btn btn-success">Donation</button></a>
        </div>
    </div>
  </div>
</section>
</div>

@stop
