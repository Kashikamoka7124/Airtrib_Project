
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
  <h1>CHANGE FLIGHT</h1>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <form id="myform" action="{{url('flight-change')}}" method="post">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label class="radio-inline">
      <input type="radio" name="optradio" checked>Option 1
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Option 2
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Option 3
    </label>
      </div>

    </div>
    <div class="form-group">
      <label for="inputAddress"></label>
      <input type="text" name="flight_num" class="form-control" id="" placeholder="Filght Number">
    </div>
    <div class="form-group">
      <label for="inputAddress2"></label>
      <input type="text" name="flight_name" class="form-control" id="" placeholder="Flight Name">
    </div>
    <div class="form-row">
      <div class="form-group col-md-2">
      </div>
      <div class="form-group col-md-4">
        <label for="inputCity"></label>
        <input type="email" name="email" class="form-control" id="" placeholder="Email">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState"></label>
        <select name="country_code">
          <option value="+92">+92</option>
          <option value="+71">+71</option>
          <option value="+91">+91</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip"></label>
    <input type="text" name="contact" class="form-control" id="inputZip">
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip"></label>
        <input type="text" style="width:100%" name="message" class="form-control" id="inputZip">
      </div>
    <button type="submit" id="btn" class="btn btn-primary" style="margin:20px;">Submit</button>
    <!-- <a href="{{url('sendbasicemail')}}"><button type="button" class="btn btn-success">Send Email</button></a> -->
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form>




        </div>
    </div>
  </div>
</section>
</div>

@stop
@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("#inputcvv").click(function(){
    $(this).hide();
  });

  $('#datepicker').datepicker({
    format: 'mm/dd/yyyy',
    startDate: '-3d'
});
        // $(function() {
        //     $('#date-picker').datepicker( {
        //     changeMonth: true,
        //     changeYear: true,
        //     showButtonPanel: true,
        //     dateFormat: 'MM yy',
        //     onClose: function(dateText, inst) {
        //         $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
        //     }
        //     });
        // });
        });
    </script>
@endsection
