<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Sistema Contable Empresa Hermes Trans S.R.L. </title>

    <!-- Bootstrap -->
    <link href="{!! asset("assets/vendors/bootstrap/dist/css/bootstrap.min.css")!!}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{!! asset("assets/vendors/font-awesome/css/font-awesome.min.css")!!}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{!! asset("assets/vendors/nprogress/nprogress.css")!!}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{!! asset("assets/vendors/animate.css/animate.min.css")!!}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{!! asset("assets/build/css/custom.min.css")!!}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            @if(session('status'))
                <div class="alert alert-danger">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('login') }}" method="POST">
            @csrf
              <h1>Iniciar Sesión</h1>
              <div>                
                <input type="email" class="form-control" value="{{ old('email') }}" placeholder="Correo Electronico" name="email" required="required" />
                <input type="password" class="form-control" placeholder="Contraseña" name="password" required="required" />
              </div>
              <div>
                <a><button class="btn btn-default" type="submit">Iniciar Sesión</button></a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">


                <div class="clearfix"></div>
                <br />
                <div>
                    <h1><i class="fa fa-paw"></i> Empresa Hermes Trans S.R.L.</h1>
                    <p>©2019 Sistema Contable.</p>
                </div>
              </div>  
            </form>

          </section>
        </div>
      </div>
    </div>
  </body>
</html>
