<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vendor</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<br>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<form method="POST" action="/Vreg/reg" class="form-horizontal">
                        
                        {{ csrf_field() }}
                        
						<div class="col-md-12">
							<div class="jumbotron">
								<div class="row">
									<div class="col-md-7 col-md-offset-4">
										<h2>Vendor  Registration</h2>
									</div>
								<div class="col-md-3">
							</div>
						</div>
						<br>

						<fieldset style="border: 2px solid black; padding: 20px 20px 20px 20px;">
							<div class="row">
								<div class="col-md-3">
									<label for="id" class="">Vendor Name<span class="asteriskField">*</span></label>
									</div>
									<div class="col-md-9">
										<input type="text" class="form-control" name="name" id="id" placeholder="Vendor Name " />
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-3">
										<label for="Type" class="">Type <span class="asteriskField">*</span></label>
									</div>
								<div class="col-md-9">
									<input type="type" class="form-control" name="type" id="Type" placeholder="Type" />
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-3">
										<label for="Stall Number" class=""> Stall Number <span class="asteriskField">*</span></label>
									</div>
									<div class="col-md-9">
										<input type="Stall Number " class="form-control" name="stall_no" id="Stall Number" placeholder="Stall Number"/>
									</div>
                    			</div>
								<br>
                    			<br>
                    			<div class="row">
                 					<div class="col-md-3">

										<label for="Block Number" class="">Block Number <span class="asteriskField">*</span></label>
									</div>
									<div class="col-md-9">
                						<input type="Block Number" class="form-control" name="block_no" id="Type" placeholder="Block Number" />
									</div>
								</div>
								<!-- <br>
                            	<br>
			            		<div class="row">
        							<div class="col-md-3">
										<label for="Block Number" class="">Vendor_ID <span class="asteriskField">*</span></label>
                                    </div>
                        			<div class="col-md-9">
										<input type="Block Number" class="form-control" name="Block Number" id="Type" placeholder="Vendor ID" />
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="row">
                                	<div class="col-md-3">
										<label for="Wallet_ID" class="">Wallet_ID <span class="asteriskField">*</span></label>
                                    </div>
                        			<div class="col-md-9">
										<input type="Wallet_ID" class="form-control" name="Wallet_ID" id="Type" placeholder="Wallet_ID" />
        							</div>
       							</div> -->
                            	<br>
                            	<br>
                            	<div class="row">
	                            	<div class="col-md-3">
										<label for="Contact Number" class="">Contact Number <span class="asteriskField">*</span></label>
                                	</div>
                        			<div class="col-md-9">
										<input type="Contact Number" class="form-control" name="phone" id="Type" placeholder="Contact Number" />
                                    </div>
                                </div>
                                 <br>
                                <br>
                                <div class="row">
	                                <div class="col-md-3">
										<label for="Username" class="">Username <span class="asteriskField">*</span></label>
                                    </div>
                        			<div class="col-md-9">
                						<input type="text" class="form-control" name="username" id="Type" placeholder="Username " />
                                    </div>
                                </div> 
                                <br>
                                <br>
                                <div class="row">
	                                <div class="col-md-3">
    							        <label for=" Create a Password" class="">Password <span class="asteriskField">*</span></label>
                                    </div>
                        			<div class="col-md-9">
                						<input type="password" class="form-control" name="password" id="Type" placeholder="Create a Password" />
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="row">
                                	<div class="col-md-3">
										<label for=" Confirm Password" class="">Re : Password <span class="asteriskField">*</span></label>
                                    </div>
                        			<div class="col-md-9">
										<input type="Confirm Password" class="form-control" name="Password" id="Type" placeholder="Confirm Password" />
                                    </div>
                                </div>
                                <br>
                                <br>
	                            <div class="row">
    		                        <div class="col-md-8">
										<div class="col-md-4 col-md-offset-4">
											<button type="submit" class="btn btn-primary btn-block">Submit</button>
										</div>
									</div>

							</fieldset>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>