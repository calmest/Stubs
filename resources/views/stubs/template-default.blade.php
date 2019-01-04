<!DOCTYPE html>
<html>
<head>
	<title>Stub Default template</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<style type="text/css">
		.stub-wrapper {
			padding: 10px;
			margin-left: 20px;
			margin-top: 30px;
			height: 520px;
			border-radius: 0px;
			background-color: #ccc;
		}

		.stub-comp {
			border:2px dotted #999;
			padding: 10px;
			width: 100%;
			margin-bottom: 5px;
		}

		.stub-inv-id {
			border:2px dotted #999;
			padding: 5px;
			width: 80px;
		}
		.stub-inv-date {
			border:2px dotted #999;
			padding: 5px;
			width: 120px;
		}

		.stub-input-plain {
			border:2px dotted #999;
			padding: 5px;
			width: 90%;
		}

		.stub-input {
			border:2px dotted #999;
			padding: 8px;
			width: 300px;
			margin-bottom: 5px;
		}

		.stub-div {
			width: 100%;
			border-radius: 15px;
			border: 1px solid #999;
		}
	</style>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="stub-wrapper row" style="background-image: url('{{ asset('images/stubs.jpg') }}')">
					<div class="col-md-6">
						<input type="text" id="company_name" class="stub-comp" placeholder="Type company name" value="" required=""><br />
						<input type="text" id="company_address" class="stub-comp" placeholder="Type company address" value="" required="">
					</div>

					<div class="col-md-6">
						<table class="text-right pull-right">
							<tr>
								<td>#<input type="text" id="inv-no" class="stub-inv-id" placeholder="0457" name="" /></td>
							</tr>
							<tr>
								<td><h2>EARNINGS STATEMENT</h2></td>
							</tr>
						</table>
					</div>

					<div class="col-md-12 stub-div">
						<table class="table">
							<tr>
								<td>
									<h5>EMPLOYEE NAME / ADDRESS</h5>
									<input type="text" class="stub-input" id="employee-name" placeholder="Type employee name here"><br />
									<input type="text" class="stub-input" id="employee-address" placeholder="Type employee street address here">
								</td>
								<td>
									<br />
									<table class="table">
										<tr>
											<td>SSN</td>
											<td>REPORTING PERIOD</td>
											<td>PAY DATE</td>
											<td>EMPLOYEE ID</td>
										</tr>
										<tr>
											<td><input type="text" class="stub-input-plain" id="stub-ssn" placeholder="ssn"></td>
											<td width="40%">
												<input type="date" class="stub-inv-date" id="report-start-date">
												<input type="date" class="stub-inv-date" id="report-end-date">
											</td>
											<td><input type="date" class="stub-input-plain" id="pay-date"></td>
											<td><input type="text" class="stub-input-plain" id="employee-id" placeholder="123"></td>
										</tr>	
									</table>
								</td>
							</tr>
						</table>
						<table class="table">
							<tr bgcolor="ligtblue">
								<td>INCOME</td>
								<td>RATE</td>
								<td>HOURS</td>
								<td>CURRENT PAY	</td>
								<td>DEDUCTIONS</td>
								<td>TOTAL</td>
								<td>YTD TOTAL</td>
							</tr>
							<tr>
								<td width="30%">GROSS EARNING</td>
								<td><input type="text" class="stub-inv-id" id="stub-rate"></td>
								<td><input type="text" class="stub-inv-id" id="stub-hours"></td>
								<td width="20%">
									<span id="current-pay"></span>
								</td>
								<td width="30%">
									<h5>STATUTORY DEDUCTIONS</h5>
									<span>FICA - MEDICARE</span><br />
									<span>FICA - SOCIAL SECURITY</span><br />
									<span>FEDERAL TAX</span><br />
								</td>
								<td>
									<span id="t-fica-m"></span>
									<span id="t-fica-s"></span>
									<span id="t-fed-tax"></span>
								</td>
								<td>
									<span id="y-fica-m"></span>
									<span id="y-fica-s"></span>
									<span id="y-fed-tax"></span>
								</td>
							</tr>
							<tr bgcolor="lightblue">
								<td>YTD GROSS</td>
								<td width="10%">YTD DEDUCTIONS</td>
								<td></td>
								<td>YTD NET PAY</td>
								<td>TOTAL</td>
								<td>DEDUCTIONS</td>
								<td width="10%">NET PAY</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>