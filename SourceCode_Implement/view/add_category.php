<?php 
    require_once("controller/Categorycontroller.php");
    $productC = new Categorycontroller();
    $productC->insert();
    $error = isset($_SESSION['error']) ? $_SESSION['error'] : "";
    $msg = isset($_SESSION['msg']) ? $_SESSION['msg'] : "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NÔNG SẢN SẠCH</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
     <!-- Example: -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./asset/loginasset/fonts/icomoon/style.css">
    <link rel="stylesheet" href="./asset/loginasset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./asset/loginasset/css/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/loginasset/css/style.css">
</head>
<body>
<section class="h-100 bg-dark">
<form action="" method="post" enctype="multipart/form-data">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
        <div class="row g-0">
            <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Tạo danh mục</h3>
                <div id="message">
                    <p style='color: green'> <?php echo $msg ?? "" ?> </p> 
                    <p style='color: red'>   <?php echo $error ?? "" ?> </p>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="danhmuc_name" name="danhmuc_name" class="form-control form-control-lg" required/>
                      <label class="form-label" for="danhmuc_name">Tên danh mục</label>
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-end pt-3">
				<a style="text-decoration: none;" href="./admin?act=product" class="btn text-white btn-block btn-danger">Quay lại</a>
                  <button type="reset" class="btn btn-light btn-lg">Đặt lại</button>
                  <input type="submit" name="submit" value="Xác nhận " class="btn text-white btn-block btn-primary">
                </div>
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</form>
</section>
    
</body>
</html>