<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>student</title>
</head>
<body>
   <div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h1> student file</h1>
            <form action="" method="POST">
                @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Full name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>

            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" name="city" class="form-control" id="city">
            </div>

            <div class="mb-3">
                <label for="marks" class="form-label">Marks</label>
                <input type="text" name="marks" class="form-control" id="marks">
            </div>
            
            <button type="submit" class="btn btn-primary">submit</button>
            </form>
        </div>
        <div class="col-sm-6"></div>
    </div>
   </div>
</body>
</html>
