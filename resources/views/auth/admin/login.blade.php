@extends('layouts.app')

@section('content')
<!-- Navbar-->
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container">
            <!-- Navbar Brand -->
            <a href="#" class="navbar-brand">
                
            </a>
        </div>
    </nav>
</header>


<div class="container">
    <div class="row align-items-center" style="padding-top: 10%">
       
        <!-- Registeration Form -->
        <div class="container col-8">
            <h1 class=" pb-3">Login Admin</h1>
            <form method="POST" action="">
                @csrf
                <div class="row">
                    <!-- Email Address -->
                    
                    <!-- <label>Username</label> -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user-o text-muted"></i>
                            </span>
                        </div>  
                        <input id="username" type="text" placeholder="Username" class="form-control" name="username" value="{{ old('username') }}"
                                required autocomplete="username" autofocus>
                            
                            @if(Session::get('error'))
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ Session::get('error') }}</strong>
                            </span>
                            @endif
                    </div>
                    <!-- Password -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="password" type="password" placeholder="Username" class="form-control" name="password" required
                    autocomplete="current-password">
              
                <div class="bar"></div>
                @error('password')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                    </div>
                    
                   <!-- Submit Button -->
                   <!-- <div class="form-group col-lg-12 mx-auto mb-0">
                    <p class="font-weight-bolder text-center"><u><a class="text-danger " href="/password/reset">Forgot Password</a></u></p> -->

                    <button type="submit"  class="btn btn-primary btn-block py-2">
                        <span class="font-weight-bold">Login</span>
                    </button>
                </div>


                    <!-- Divider Text -->
                    <!-- <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                        <div class="border-bottom w-100 ml-5"></div>
                        <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                        <div class="border-bottom w-100 mr-5"></div>
                    </div> -->

                    <!-- don't have an account -->
                    <!-- <div class="text-center w-100">
                        <p class="text-muted font-weight-bold">don't have an account? <a href="/register" class="text-danger ml-2">Register here</a></p>
                    </div> -->

                </div>
            </form>
        </div>
         <!-- For Demo Purpose -->
        
    </div>
</div>

@endsection
