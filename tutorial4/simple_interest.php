<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Simple Interest</title>
</head>
<body>
    <div class="container">
        <form action="result.php" method="post" class="form-control">
            <div class="form-control">
                <label for="Principal">Principal</label>
                <input type="text" name="Principal" id="Principal">
            </div>
            <div class="form-control">
                <label for="Rate">Rate of interest:</label>
                <input type="text" name="Rate" id="Rate">
            </div>
            <div class="form-control">
                <label for="Year">No of Year:</label>
                <input type="text" name="Year" id="Year">
            </div>
            <div class="form-control">
                <input type="submit" value="Submit" class="btn btn-success" >
            </div>
        </form>
    </div>
    

</body>
</html>