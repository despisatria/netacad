<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <meta name='description' content='Join Educode and learn to code from the best online free courses programs.'>
  <link rel='icon' href='{{ asset("img/favicon.png")}}'>

  <title>NETACAD - Network Academy</title>
  <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900,900i" rel="stylesheet">
  <link href='{{ asset("css/bootstrap.min.css") }}' rel='stylesheet'>
  <link href='{{ asset("css/font-awesome.min.css") }}' rel='stylesheet'>
  <!-- <link href='{{ asset("css/video.css") }}' rel='stylesheet'> -->
  <link href='{{ asset("css/style.css") }}' rel='stylesheet'>
  <link href='{{ asset("css/animate.min.css") }}' rel='stylesheet'>
  <link href='{{ asset("css/sweetalert.css") }}' rel='stylesheet'>

  <script src='{{ asset("js/jquery.min.js") }}'></script>
  <script src='{{ asset("js/bootstrap.min.js") }}'></script>
  <script src='{{ asset("js/waypoint.min.js") }}'></script>
  <script src='{{ asset("js/sweetalert.min.js") }}'></script>
</head>

<body>
  <div class='modal fade' id='login' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
     <div class='modal-dialog' role='document'>
       <div class='modal-content'>
          <div class='modal-body'>
            <div class='row'>
               <div class='col-md-12 modal-top'>
                 <div class='container'>
                    <div class='row'>
                      <div class='col-md-6'>
                         <div class='login-card'>
                           <ul class='nav nav-tabs' role='tablist'>
                              <li role='presentation' class='daftar-tab'><a href='#daftar' aria-controls='daftar' role='tab' data-toggle='tab'>DAFTAR</a></li>
                              <li role='presentation' class='masuk-tab active'><a href='#masuk' aria-controls='masuk' role='tab' data-toggle='tab'>MASUK</a></li>
                           </ul>

                           <!-- Tab panes -->
                           <div class='tab-content'>
                              <div role='tabpanel' class='tab-pane' id='daftar'>
                                <div class='tab-card daftar-form'>
                                   <h3>Daftarkan akun Anda</h3>
                                   <form action="{{ route('register') }}" class='form-signin' method='POST'>
                                     @csrf
                                    <input type="hidden" name="level" value="1">
                                    <div class='form-group'>
                                       <input type='text' class='form-control' id='nama' name='name' placeholder='Nama Lengkap' required="">
                                    </div>
                                    <div class='form-group'>
                                       <input type='text' class='form-control' id='nim' name='nim' placeholder='NIS' required="">
                                    </div><!-- 
                                <div class='form-group'>
                                <input type='email' class='form-control' id='password' name='email' placeholder='Email'>
                                <input type="hidden" name="level">
                             </div> -->
                             <div class="form-group">
                              <div class="input-group" id="show_hide_password">
                               <input class="form-control" type="password" id='password' name='password' placeholder='Kata Sandi' required="">
                               <div class="input-group-addon">
                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                             </div>
                          </div>
                       </div>
                       <div class='form-group'>
                         <input type="hidden" name="level">
                      </div>
                      <button type='submit' class='btn btn-success sign-button'>Daftar</button>
                   </form>
                </div>
             </div>
             <div role='tabpanel' class='tab-pane active' id='masuk'>
              <div class='tab-card login-form'>
                 <h3>Masuk dengan akun Anda</h3>
                 <form action="{{ route('login') }}" class='form-signin' method='POST'>
                   @csrf
                   <div class='form-group'>
                     <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="nim" value="{{ old('email') }}" placeholder="NIS" required autofocus>
                  </div>
                  <div class='form-group'>
                     <div class="input-group" id="show_hide_password">
                      <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" id='password' name='password' placeholder='Kata Sandi' required>
                      <div class="input-group-addon">
                       <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                    </div>
                 </div>
              </div>
              <button type='submit' class='btn btn-success sign-button'>Masuk</button>
           </form>
        </div>
     </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class='modal-footer'>
   <button type='button' class='btn btn-danger' data-dismiss='modal'>Tutup</button>
</div>
</div>
</div>
</div>
<section id='home'>
  <div class='overlay'></div>
</div> -->
<div class='header'>
 <div class='container'>
    <img src='{{asset("img/logo-netacad.png") }}'>
    <h2>
      <span>
         Belajar Jaringan Komputer lebih mudah dengan <i>Integrated Real-Life Video Animation (IRVA).</i><br>
         Penjelasan materi dengan integrasi video dan animasi akan membantumu untuk lebih mudah <br> 
         memahami materi Jaringan Komputer ke dalam contoh kehidupan sehari-hari.
      </span>
   </h2>
   <div>
      <a href='#' class='btn-white btn' data-toggle='modal' data-target='#login'>Masuk</a>
   </div>
</div>
</div>
</section>
<script type="text/javascript">
 $(document).ready(function() {
   $("#show_hide_password a").on('click', function(event) {
     event.preventDefault();
     if($('#show_hide_password input').attr("type") == "text"){
       $('#show_hide_password input').attr('type', 'password');
       $('#show_hide_password i').addClass( "fa-eye-slash" );
       $('#show_hide_password i').removeClass( "fa-eye" );
    }else if($('#show_hide_password input').attr("type") == "password"){
       $('#show_hide_password input').attr('type', 'text');
       $('#show_hide_password i').removeClass( "fa-eye-slash" );
       $('#show_hide_password i').addClass( "fa-eye" );
    }
 });
});
</script>
<script type='text/javascript'>
 document.querySelector('.daftar-form .sign-button').onclick = function(){
   swal('Terimakasih!', 'Anda dapat masuk dengan menggunakan akun tersebut.', 'success');
};
</script>
@if (count($errors) > 0)
<script type="text/javascript">
 swal('Login Gagal!', 'NIM atau Kata Sandi Salah!', 'error');
</script>
@endif
<script type='text/javascript'>
 $(document).ready(function(){

   $('.fadeup').css('opacity', 0);
   $('.fadeup').waypoint(function() {
     $('.fadeup').addClass('fadeInUp');
  }, { offset: '100%' });

   $('.faderight').css('opacity', 0);
   $('.faderight').waypoint(function() {
     $('.faderight').addClass('fadeInRight');
  }, { offset: '100%' });

   $('.fadeleft').css('opacity', 0);
   $('.fadeleft').waypoint(function() {
     $('.fadeleft').addClass('fadeInLeft');
  }, { offset: '100%' });

   $('.fadeleft1').css('opacity', 0);
   $('.fadeleft1').waypoint(function() {
     $('.fadeleft1').addClass('fadeInLeft');
  }, { offset: '100%' });

   $('.fadein1').css('opacity', 0);
   $('.fadein1').waypoint(function() {
     $('.fadein1').addClass('fadeIn');
  }, { offset: '100%' });

   $('.fadein2').css('opacity', 0);
   $('.fadein2').waypoint(function() {
     $('.fadein2').addClass('fadeIn');
  }, { offset: '100%' });

   $('.fadein3').css('opacity', 0);
   $('.fadein3').waypoint(function() {
     $('.fadein3').addClass('fadeIn');
  }, { offset: '100%' });

});
</script>

<footer>
 <div class='container footer-bot'>
   <span>Copyright &copy; 2019 Desphi Satria | Made with <i class="fa fa-heart"></i> in Bandung</span>
</div>
</footer>

</body>
</html>