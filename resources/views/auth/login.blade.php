<!DOCTYPE html>
<html>
<head>
  <title>Login Admin</title>
  <link href="../public/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">
    body {
      background-color: #607D8B;
    }
  </style>
</head>
<body>
  <form method="POST" action="/auth/login" style="margin-top: 10%;">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #2c3e50;color: white;">
          <h4 class="modal-title"><strong><i class="glyphicon glyphicon-user"></i> Sign In</strong></h4>
        </div>
        {!! csrf_field() !!}
        <div class="modal-body">
              <div class="form-group">
                  Email
                  <input type="email" name="email" class="form-control" value="{{ old('email') }}">
              </div>

              <div class="form-group">
                  Password
                  <input type="password" name="password" class="form-control" id="password">
              </div>

              <div class="form-group">
                  <label>
                      <input type="checkbox" name="remember"> Remember Me
                  </label>
              </div>
        </div>
        <div class="modal-footer">
          <div class="btn-group">
              <a class="btn btn-danger" href="/"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</a>
              <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-share"></i> Sign In</button>
          </div>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </form>
</body>
</html>
