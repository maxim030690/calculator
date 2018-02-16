<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Colculator</title>
	<link rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap-theme.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="bootstrap-3.3.2-dist/js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="nav nav-tabs tabs">
					<li class="active"><a data-toggle="tab" href="#panel1">Affordability Calculator</a></li>
					<li><a data-toggle="tab" href="#panel2">Help</a></li>
				</ul>
				<div class="tab-content calculator-data">
					<div id="panel1" class="tab-pane fade in active">
						<form action="">
							<div class="row our-row">
								<div class="col-lg-4">
									<p class="title-input">Annual Income (Gross)</p>
									<div class="input-group">
									  <span class="input-group-addon icon-input">$</span>
									  <input type="text" class="our-data form-control" placeholder="$">
									</div>
								</div>
								<div class="col-lg-4">
									<p class="title-input">Credit Card Balances (Total)</p>
									<div class="input-group">
									  <span class="input-group-addon icon-input">$</span>
									  <input type="text" class="our-data form-control" placeholder="$">
									</div>
								</div>
								<div class="col-lg-4">
									<p class="title-input">Car Loan Payment (Monthly)</p>
									<div class="input-group">
									  <span class="input-group-addon icon-input">$</span>
									  <input type="text" class="our-data form-control" placeholder="$">
									</div>
								</div>
							</div>
							<div class="row our-row">
								<div class="col-lg-4">
									<p class="title-input">Credit Card Balances (Total)</p>
									<div class="input-group">
									  <span class="input-group-addon icon-input">$</span>
									  <input type="text" class="our-data form-control" placeholder="$">
									</div>
								</div>
								<div class="col-lg-4">
									<p class="title-input">Other Debt Payments (Monthly</p>
									<div class="input-group">
									  <span class="input-group-addon icon-input">$</span>
									  <input type="text" class="our-data form-control" placeholder="$">
									</div>
								</div>
								<div class="col-lg-4">
									<p class="title-input">Property Tax (Annual)</p>
									<div class="input-group">
									  <span class="input-group-addon icon-input">$</span>
									  <input type="text" class="our-data form-control" placeholder="$">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4">
									<p class="title-input">Condo / Strata Fees (Monthly)</p>
									<div class="input-group">
									  <span class="input-group-addon icon-input">$</span>
									  <input type="text" class="our-data form-control" placeholder="$">
									</div>
								</div>
								<div class="col-lg-4">
									<p class="title-input">Down Payment?</p>
									<div class="input-group">
									  <span class="input-group-addon icon-input">%</span>
									  <input type="text" class="our-data form-control" placeholder="%">
									</div>
								</div>
								<div class="col-lg-4">
									<input class="submit-data" type="submit" value="submit">
								</div>
							</div>
						</form>
					</div>
					<div id="panel2" class="tab-pane fade">
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<style>
body{
	background: #3a27a5;
}
.title-input{
	color: #fff;
    font-weight: 700;
}
.tabs{
	margin-top: 20px;
}
.submit-data{
	margin-top: 30px;
    width: 100%;
    background: #277aa2;
    color: #fff;
    border: none;
    font-size: 22px;
    border-radius: 10px;
}
.submit-data:hover{
    background: #2791a2;
}
.our-row{
	margin-bottom: 15px;
}
.icon-input{
	background: #277aa2;
    color: #FFF;
    font-size: 20px;
    border: #277aa2;
    font-weight: 700;
}
.calculator-data{
	margin-top: 20px;
}
</style>