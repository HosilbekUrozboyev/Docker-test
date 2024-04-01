<?php
//echo "Hello from App2!";

$message = $_REQUEST['message'];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>App2</title>
</head>
<body>
<h1 style="text-align: center">
    App2
</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Sizning formangiz yoki boshqa ma'lumotlaringiz shu joyda joylashadi -->
            <!--            <form action=http://app2:80">-->
            <form action="http://localhost:80" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">app1 dan kelgan xabar</label>
                    <input type="text" class="form-control" id="exampleInputMessage" name="message" value="<?php echo $message?>">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">app1 ga xabar yuborish</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="message" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Yuborish</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>

