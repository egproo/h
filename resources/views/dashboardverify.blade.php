@extends('layouts.app')
@section('title', 'تفعيل حسابك في حريص')
@section('content')

  <section class="u-clearfix u-custom-color-5 u-section-1" id="sec-3e49">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-container-style u-group u-radius-25 u-shape-round u-white u-group-1" data-animation-name="pulse"
        data-animation-duration="3500" data-animation-direction="" style="margin-bottom: 20px">
        <div class="u-container-layout u-valign-middle-sm u-container-layout-1">
          <h3 class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-1" style="font-size: 1.3rem;">تفعيل الحساب في حريص</h3>
        </div>
      </div>

<style>
    .formv {
        max-width: 400px;
        margin: 30px auto;
        padding: 20px;
        border: 1px solid #DDD;
        border-radius: 10px;
        box-shadow: 10px 10px 5px 0px #cccccc;
    }
    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #DDD;
        border-radius: 10px;
        font-size: 16px;
		    text-align: center;
    }
    button[type="submit"] {
        padding: 10px 20px;
        border: none;
        border-radius: 10px;
        background-color: #49a8a0;
        color: #FFF;
        font-size: 16px;
        cursor: pointer;
        margin: 0 auto;
        display: block;		
    }
    button[type="submit"]:hover {
        background-color: #54a8d4;
    }
</style>

<form class="formv"  method="POST" action="{{ route('dashboard.verifyotp') }}">
    @csrf
    <input type="text" name="otp" placeholder="أدخل الرمز السري المرسل لجوالك">
    <button type="submit">تأكيد الحساب</button>
</form>



    </div>
  </section>
@endsection 