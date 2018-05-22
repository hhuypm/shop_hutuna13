@extends('master')
@section('content')
	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Checkout</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<form id="checkout-form" class="clearfix">
					<div class="col-md-6">
						<div class="billing-details">
							<p>Bạn đã có tài khoản ? <a href="#">Đăng nhập</a></p>
							<div class="section-title">
								<h3 class="title">Thông Tin Khách Hàng</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="first-name" placeholder="Tên">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last-name" placeholder="Họ tên">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Địa chỉ">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" placeholder="Thành phố">
							</div>
							<!-- <div class="form-group">
								<input class="input" type="text" name="country" placeholder="Country">
							</div> -->
							<div class="form-group">
								<input class="input" type="text" name="zip-code" placeholder="ZIP Code">
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="SĐT">
							</div>
							<div class="form-group">
								<div class="input-checkbox">
									<input type="checkbox" id="register">
									<label class="font-weak" for="register">Tạo tài khoản ?</label>
									<div class="caption">
										<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
											<p> -->
												<input class="input" type="password" name="password" placeholder="Nhập mật khẩu">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="shiping-methods">
							<div class="section-title">
									<input type="radio" name="shipcode" id="shipcode-1" checked>
									<h4 class="title">TÙY CHỌN GIAO HÀNG</h4>
							</div>
							<div class="caption">
									<div class="input-checkbox">
											<input type="radio" name="shipping" id="shipping-1" checked>
											<label for="shipping-1">Miễn phí giao hàng -  0đ</label>
											<div class="caption">
												<p>Với hóa đơn trên 1.000.000đ
													<p>
											</div>
									<div class="input-checkbox">
											<input type="radio" name="shipping" id="shipping-2">
											<label for="shipping-2">Tính phí giao hàng - 50.000đ</label>
											<div class="caption">
												<p>Với hóa đơn dưới 1.000.000đ
													<p>
											</div>
									</div>
									</div>
							</div>

						</div>

						<div class="payments-methods">
							<div class="section-title">
									<input type="radio" name="shipcode" id="shipcode-2">
								<h4 class="title">Thanh toán bằng thẻ </h4>
							</div>
							<div class="caption">
									<div class="input-checkbox">
											<input type="radio" name="payments" id="payments-1" checked>
											<label for="payments-1">Thẻ Ngân Hàng</label>
											<div class="caption">
												<p>Số ngân hàng của mình
													<p>
											</div>
										</div>
										<div class="input-checkbox">
											<input type="radio" name="payments" id="payments-2">
											<label for="payments-3">Paypal System</label>
											<div class="caption">
												<p>đéo biết
													<p>
											</div>
										</div>
							</div>

						</div>
					</div>

					<div class="col-md-12">
						<div class="order-summary clearfix">
							<div class="section-title">
								<h3 class="title">Order Review</h3>
							</div>
							<table class="shopping-cart-table table">
								<thead>
									<tr>
										<th>Product</th>
										<th></th>
										<th class="text-center">Price</th>
										<th class="text-center">Quantity</th>
										<th class="text-center">Total</th>
										<th class="text-right"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="thumb"><img src="resource/img/thumb-product01.jpg" alt=""></td>
										<td class="details">
											<a href="#">Product Name Goes Here</a>
											<ul>
												<li><span>Size: XL</span></li>
												<li><span>Color: Camelot</span></li>
											</ul>
										</td>
										<td class="price text-center"><strong>$32.50</strong><br><del class="font-weak"><small>$40.00</small></del></td>
										<td class="qty text-center"><input class="input" type="number" value="1"></td>
										<td class="total text-center"><strong class="primary-color">$32.50</strong></td>
										<td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-close"></i></button></td>
									</tr>
									<tr>
										<td class="thumb"><img src="resource/img/thumb-product01.jpg" alt=""></td>
										<td class="details">
											<a href="#">Product Name Goes Here</a>
											<ul>
												<li><span>Size: XL</span></li>
												<li><span>Color: Camelot</span></li>
											</ul>
										</td>
										<td class="price text-center"><strong>$32.50</strong></td>
										<td class="qty text-center"><input class="input" type="number" value="1"></td>
										<td class="total text-center"><strong class="primary-color">$32.50</strong></td>
										<td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-close"></i></button></td>
									</tr>
									<tr>
										<td class="thumb"><img src="resource/img/thumb-product01.jpg" alt=""></td>
										<td class="details">
											<a href="#">Product Name Goes Here</a>
											<ul>
												<li><span>Size: XL</span></li>
												<li><span>Color: Camelot</span></li>
											</ul>
										</td>
										<td class="price text-center"><strong>$32.50</strong></td>
										<td class="qty text-center"><input class="input" type="number" value="1"></td>
										<td class="total text-center"><strong class="primary-color">$32.50</strong></td>
										<td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-close"></i></button></td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SUBTOTAL</th>
										<th colspan="2" class="sub-total">$97.50</th>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SHIPING</th>
										<td colspan="2">Free Shipping</td>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>TOTAL</th>
										<th colspan="2" class="total">$97.50</th>
									</tr>
								</tfoot>
							</table>
							<div class="pull-right">
								<button class="primary-btn">Place Order</button>
							</div>
						</div>

					</div>
				</form>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

@endsection