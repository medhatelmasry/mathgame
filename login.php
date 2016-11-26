<?php include("include/header.php"); ?>
<div class="row">
    <div class="col-sm-10 col-sm-offset-1"><h1>Please login to enjoy our math game.</h1></div>
    <div class="col-sm-1"></div>
</div>
<form action="authenticate.php" method="post" role="form" class="form-horizontal">
    <div class="form-group">
        <div class="col-sm-4 text-right">Email:</div>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email" size="6">
        </div>
        <div class="col-sm-5"></div>
    </div>
    <div class="form-group">
        <div class="col-sm-4 text-right">Password:</div>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="password" name="password" placeholder="Password" size="6">
        </div>
        <div class="col-sm-5"></div>
    </div>
    <div class="row">
        <div class="col-sm-3 col-sm-offset-4">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </div>
</form>
<div class="row">
<?php
    if (isset($_GET["msg"])) {
        echo "<p class='col-sm-3 col-sm-offset-4 text-danger'>" . $_GET["msg"] . "</p>";
    }
?>
</div>
<?php include("include/footer.php"); ?>
