@extends('MasterHead')
@section('body')
<style>
    #card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: fit-content;
        margin: 6rem auto 8.1rem auto;
        width: 529px;
        
    }
    #card-content {
      padding: 12px 44px;
    }
    #card-title {
      font-family: "Raleway Thin", sans-serif;
      letter-spacing: 4px;
      padding-bottom: 23px;
      padding-top: 13px;
      text-align: center;
    }
    .underline-title {
      background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
      height: 2px;
      margin: -1.1rem auto 0 auto;
      width: 95%;
    }
    a {
    text-decoration: none;
    }
    label {
        font-family: "Raleway", sans-serif;
        font-size: 11pt;
    }
    #forgot-pass {
        color: #2dbd6e;
        font-family: "Raleway", sans-serif;
        font-size: 10pt;
        margin-top: 3px;
        text-align: right;
    }
    .form {
        align-items: left;
        display: flex;
        flex-direction: column;
    }
    .form-border {
        background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
        height: 1px;
        width: 100%;
    }
    .form-content {
        background: #fbfbfb;
        border: none;
        outline: none;
        padding-top: 14px;
    }
    #signup {
    color: #2dbd6e;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 16px;
    text-align: center;
    }
    #submit-btn {
        background: -webkit-linear-gradient(right, #7bc5f7, #012496);
        border: none;
        border-radius: 21px;
        box-shadow: 0px 1px 8px #1230da;
        cursor: pointer;
        color: white;
        font-family: "Raleway SemiBold", sans-serif;
        height: 42.3px;
        margin: 0 auto;
        margin-top: 50px;
        transition: 0.25s;
        width: 153px;
    }
    #submit-btn:hover {
        box-shadow: 0px 1px 18px #24c64f;
    }
</style>
    <div class="hero-wrap js-fullheight" style="background-image: url('images/login.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Home</a></span> <span>Login</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Login</h1>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section ftco-degree-bg">
        <div id="card">
            <div id="card-content">
                <div id="card-title">
                  <h2>FORGOT PASSWORD?</h2>
                </div>
                @include('alert')
                <form method="post" class="form" action="emailresetpass"> 
                    @csrf
                    <label for="email" style="padding-top:13px">&nbsp;Email</label>
                    <input id="email" class="form-content" type="email" name="email" autocomplete="on" required>
                    <div class="form-border"></div>
                    {{-- <br/>
                        <h2>RESET PASSWORD</h2> --}}

                    {{-- <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
                    <input id="user-password" class="form-content" type="password" name="password" required>
                    <div class="form-border"></div>
                    <label for="con-password" style="padding-top:22px">&nbsp;Confirm Password</label>
                    <input id="con-password" class="form-content" type="password" name="conpassword" required>
                    <div class="form-border"></div> --}}
                    <input id="submit-btn" type="submit" name="submit" value="Send Verification Code">
                </form>
              </div>
        </div>
    </section> <!-- .section -->
@endsection
