<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ quản trị</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
</head>
<body>
    <h1 align="center">Trang Chủ Quản Trị</h1>
    <div class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h1>DALLAS Furniture</h1>
                </div>
                <div class="col-md-3 text-right">
                    <a href="?controller=login&action=logout" class="btn btn-info" style="margin-top: 20px;">Đăng xuất</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                        Trang chủ
                    </a>
                    <a href="?controller=admin&redirect=user" class="list-group-item list-group-item-action">Quản lý thành viên</a>
                    <a href="?controller=admin&redirect=product" class="list-group-item list-group-item-action">Quản lý sản phẩm</a>
                    <a href="#" class="list-group-item list-group-item-action">Quản lý đơn hàng</a>
                </div>
            </div>
            <div class="col-md-9">
            <div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<a href="product.php"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg></a>
						</div>
						<div  class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?= $arr['count_product'] ?></div>
							<div class="text-muted">Sản Phẩm</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<a href="user.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg></a>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?= $arr['count_user'] ?></div>
							<div class="text-muted">Thành Viên</div>
						</div>
					</div>
				</div>
			</div>

			
		
		</div><!--/.row-->
            </div>
        </div>
    </div>
</body>
</html>