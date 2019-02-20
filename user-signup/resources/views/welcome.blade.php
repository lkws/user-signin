<!doctype html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <form method="POST" action="/register" accept-charset="UTF-8">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name" class="control-label">用户名:</label>
                    <input id="name" name="name" type="text" class="form-control" placeholder="请填写用户名">
                </div>
                <div class="form-group">
                    <label for="email" class="control-label">邮箱:</label>
                    <input id="email" name="email" class="form-control" placeholder="请填写正确邮箱">
                </div>
                <div class="form-group">
                    <label for="password" class="control-label">密码:</label>
                    <input id="password" name="password" class="form-control" placeholder="请填写密码">
                </div>
                <button type="submit" class="btn btn-primary">注册</button>
            </form>
        </div>
    </div>
    </body>
</html>
