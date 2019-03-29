<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <title></title>
    <h1>Garaj details</h1>
</head>
<body>

    <form  action="approval.php" method="post">
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">First name</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="fname" placeholder="first name" >
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Last name</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="lname" placeholder="last name" >
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="uname" placeholder="username" >
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">city</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="city" placeholder="city">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">State</label>
            <div class="col-sm-10">
                <input class="form-control" type="text"  name="state" placeholder="state">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label"> Zip</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="zip" placeholder="zip" >
            </div>
        </div>

<!--        <input type="button"  name="submit" class="btn btn-primary" value="submit for approval"> -->
        <button type="submit" name="submit" class="btn btn-primary" value="submit for approval"> </button>
           
       

    </form>





</body>
</html>