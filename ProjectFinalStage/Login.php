<?php include_once('header.html'); ?>

<div class="container">
<div class="row">	
<div class="col-lg-6 col-sm-6"> 
<table class="table-responsive table">
<form method="post" action="functions/login_process.php">
<thead class="text-center text-capitalize"><h3>Log In</h3></thead>
<tr class="form-group row">
<td>Email:</td>
<td><input type="email" class="form-control" name="email"></td>
</tr>
<tr class="form-group row">
<td>Password:</td>
<td><input type="password" class="form-control" name="password"></td>
</tr>
<tr class="form-group row">
<td><input type="submit" class="btn btn-default"></td>
</tr>
</form>
</table>
</div>
<div class="col-lg-6 col-sm-6">
<table class="table-responsive table">
<form class="form-control" method="post" action="functions/registration_process.php">
<thead class="text-center text-capitalize"><h3>Sign Up</h3></thead>
<tr class="form-group row">
<td>Name:</td>
<td><input type="text" class="form-control" name="name"></td>
</tr>
<tr class="form-group row">
<td>Email:</td>
<td><input type="email" class="form-control" name="email"></td>
</tr>
<tr class="form-group row">
<td>Password:</td>
<td><input type="password" class=" form-control" name="password"></td>
</tr>
<tr class="form-group row">
<td>Confirm Password:</td>
<td><input type="password" class=" form-control" name="confirmpassword"></td>
</tr>
<tr class="form-group row">
<td>Phone:</td>
<td><input type="text" class="form-control" name="phone"></td>
</tr>
<tr class="form-group row">
<td><input type="submit" class=" form-control btn-default">
</tr>
</form>
</table>
</div>
</div>	
</div>
<?php include_once('footer.html'); ?>