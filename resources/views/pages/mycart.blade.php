@extends('master')
@section('content')
	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="index.php">Trang Chủ</a></li>
				<li><a href="">Giỏ Hàng</a></li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->



	<!-- Giỏ hàng -->
		<div class="container">
			<table id="cart" class="table table-hover">
				<thead>
					<tr>
						<th width="40%">Tên sản phẩm</th>
						<th width="20%">Giá</th>
						<th width="10%">Số lượng</th>
						<th width="30%" class="text-center">Thành tiền</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td data-th="Product">
							<div class="row">
								<div class="col-md-6">
									<img src="resource/img/banner12.jpg" alt="Sản phẩm 1" class="img-responsive" width="100">
								</div>
								<div class="col-md-6">
									<h4 class="nomargin">Sản phẩm 1</h4>
								</div>
							</div>
						</td>

						<td data-th="Price">200.000 đ </td>
						<td data-th="Quantity"><input class="form-control text center" value="1" type="number"></td>
						<td data-th="Subtotal" class="text-center">200.000 đ</td>
						<td class="action" data-th="">
							<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
						</td>
					</tr>

					<tr>
						<td data-th="Product">
							<div class="row">
								<div class="col-md-6">
									<img src="resource/img/banner11.jpg" alt="Sản phẩm 2" class="img-responsive" width="100">
								</div>
								<div class="col-md-6">
									<h4 class="nomargin">Sản phẩm 2</h4>
								</div>
							</div> 
						</td>

						<td data-th="Price">300.000 đ</td>
						<td data-th="Quantity"><input class="form-control text center" value="1" type="number"></td>
						<td data-th="Subtotal" class="text-center">300.000 đ</td>
						<td class="action" data-th="">
							<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
						</td>
					</tr>
				</tbody>

				<tfoot>
					<tr class="visible-xs">
						<td class="text-center"><strong>Tổng 200.000 đ</strong>
						</td>
					</tr>
					<tr>
						<td>
							<a href="index.php" class="btn btn-warning">Tiếp tục mua hàng</a>
						</td>
						<td colspan="2" class="hidden-xs"></td>
						<td class="hidden-sx text-center"><strong>Tổng tiền 500.000 đ</strong></td>
						<td><a href="" class="btn btn-success btn-block btn-lg">Thanh toán <i class="far fa-dollar-sign"></i></a></td>
					</tr>
				</tfoot>

			</table>
		</div>
	<!-- Giỏ hàng -->
@endsection