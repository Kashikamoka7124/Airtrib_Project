
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


<!--  -->
@extends('layouts.page')

@section('content')



<div class="content-wrapper">

<section class="content">
    <div class="row" style=" background-color: #E1EFD8; border: none; padding-top: 0px; ">

<div class="col-lg-12">
<div class="alerts-con"></div>

<div class="box"  >
<div class="box-header" style="background-color: #E1EFD8; padding:0">
  <h1>MAKE A DONATION</h1>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <form id="myform" action="{{url('add_donate')}}" method="post">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Amount*</label>
        <input type="number" name="amount" class="form-control" id="inputEmail4" placeholder="Amount">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Currency*</label>

        <select name="currency">
            @if(!is_null($currency))
            @foreach($currency as $c)
            <option value="{{$c->id}}">{{$c->title}}</option>
            @endforeach
            @endif
        </select>


      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">First Name*</label>
      <input type="text" name="fname" class="form-control" id="inputAddress" placeholder="First name">
    </div>
    <div class="form-group">
      <label for="inputAddress2">Last Name*</label>
      <input type="text" name="lname" class="form-control" id="inputAddress2" placeholder="Last Name">
    </div>
    <div class="form-row">
      <div class="form-group col-md-2">
      </div>
      <div class="form-group col-md-4">
        <label for="inputCity">Email*</label>
        <input type="email" name="email" class="form-control" id="inputCity">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">Confirm Email*</label>
        <input type="email" name="c_email" class="form-control" id="inputnumeberpeople">
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Type of Card*</label>
      <select name="type_card">
        <option value="1">Prepaid Card</option>
        <option value="2">Credit Card</option>
        <option value="3">Debit Card</option>
      </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Name on Card*</label>
        <input type="text" name="name_card" class="form-control" id="inputZip">
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Card Number*</label>
        <input type="text" name="card_num" class="form-control" id="inputZip">



      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Expiry*</label>
        <input type="date" name="expiry" class="form-control" id="datepicker">
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">CVV*</label>
        <input type="number" name="cvv" class="form-control" id="inputcvv">
      </div>
    </div>
    <button type="submit" id="btn" class="btn btn-primary">Submit</button>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form>



  <a href="{{url('change-flight')}}"><button type="button" class="btn btn-success">Change Ticket</button></a>
        </div>
    </div>
  </div>
</section>
</div>

@endsection
@section('js')
<script src="jquery-3.5.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
  alert('ali');
  });
});
</script>

@endsection
