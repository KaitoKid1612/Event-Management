<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.head')
</head>

<body>
   <!-- Main Header Start -->
   @include('frontend.header')
   <!-- Main Header end -->
   <div class="login-box">
      <div class="login-logo">
          <a href="#"><b>Đăng Nhập Sinh Viên</b></a>
      </div>
      <!-- /.login-logo -->
      <div class="card">
          <div class="card-body login-card-body">
              <p class="login-box-msg">Xin mời đăng nhập</p>
              @include('admin.alert')
              <form action="/dang-nhap/trang-chu" method="post" class="login">
                  <div class="input-group mb-3">
                      <input type="text" name="roll_no" class="form-control" placeholder="Mã Sinh Viên">
                      <div class="input-group-append">
                          <div class="input-group-text">
                              <span class="fas fa-envelope"></span>
                          </div>
                      </div>
                  </div>
                  <div class="input-group mb-3">
                      <input type="password" name="password" class="form-control" placeholder="Mật Khẩu">
                      <div class="input-group-append">
                          <div class="input-group-text">
                              <span class="fas fa-lock"></span>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-8">
                          <div class="icheck-primary">
                              <input type="checkbox" name="remember" id="remember">
                              <label for="remember">
                                  Nhớ cho lần sau
                              </label>
                          </div>
                      </div>
                      <!-- /.col -->
                      <div class="col-4">
                          <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                      </div>
                      <!-- /.col -->
                  </div>
                  @csrf
              </form>
          
              <p class="mb-1">
              <a href="/admin/users/forgot-password">Lấy lại mật khẩu</a>
              </p>
          </div>
      </div>
   </div>

   
   <!-- Footer start -->
   @include('frontend.footer')

</body>
</html>


