<?php include "view/header.php"?>
<!------ Include the above in your HEAD tag ---------->
<br><br>
<div class="container col-md-4">

<form method"post" action="registroc.php" >
<div class=" col-md-offset-4" id="login">
	<section id="inner-wrapper" class="login">
		<article>
			<form>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-user"> </i></span>
					<input type="text" class="form-control"  placeholder="Name">
				</div>
			</div>
		    <div class="form-group">
			    <div class="input-group">
				    <span class="input-group-addon"><i class="fa fa-envelope"> </i></span>
					<input type="email" class="form-control"name="email" placeholder="Email Address">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-key"> </i></span>
					<input type="password" class="form-control" name="password" placeholder="Password">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-key"> </i></span>
					<input type="password" class="form-control" placeholder="Confirm Password">
				</div>
									</div>
									<button type="submit" class="btn btn-success btn-block">Submit</button>
								</form>
							</article>
						</section></div>
</body>
</head>
</Html>
<?php   
?>