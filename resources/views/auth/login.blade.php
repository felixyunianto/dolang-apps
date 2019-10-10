
<!DOCTYPE html>
<html lang="en">

@include('templates.partials._head')

<body>
  <div class="container-scroller">
     <div class="container-fluid page-body-wrapper full-page-wrapper">
       <div class="content-wrapper d-flex align-items-center auth login-full-bg">
         <div class="row w-100">
           <div class="col-lg-4 mx-auto">
             <div class="auth-form-light text-left p-5">
               @if(Session::has('error'))
               <div class="col-12">
                    <div class="alert alert-danger" role="alert">
                        <strong>{{Session::get('error')}}</strong>
                    </div>
                  </div>
                  @endif
               <h2 class="text-center">Dolang</h2>
               <h4 class="font-weight-light text-center">Admin Login</h4>
               <form class="pt-5" method="post" action="{{route('login')}}">
                 @csrf
                 <div class="form-group">
                   <label for="exampleInputEmail1">Username</label>
                   <input type="text" name="username" class="form-control" placeholder="Username">
                   <i class="mdi mdi-account"></i>
                 </div>
                 <div class="form-group">
                   <label for="exampleInputPassword1">Password</label>
                   <input type="password" name="password" class="form-control" placeholder="Password">
                   <i class="mdi mdi-eye"></i>
                 </div>
                 <div class="mt-5">
                   <button class="btn btn-block btn-success btn-lg font-weight-medium" type="submit">Login</button>
                 </div>
                 <div class="mt-3 text-center">
                   <a href="#" class="auth-link text-white">Forgot password?</a>
                 </div>
               </form>
             </div>
           </div>
         </div>
       </div>
       <!-- content-wrapper ends -->
     </div>
     <!-- page-body-wrapper ends -->
   </div>
  @include('templates.partials._script')
</html>
