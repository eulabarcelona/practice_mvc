<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="Enter your description here" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Title</title>
</head>

<body>

 

  <div class="container">
    <div class="row">
      <div class="col-6">
        <form action="http://localhost:8000/Show_input/checkString" method="POST">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type=text class="form-control" id="name" placeholder="Enter name" name="name" required>
          </div>
          <div class="form-group">
            <label for="pwd">phone number:</label>
            <input type="tel" id="phone" name="phone" placeholder="0977-047-9240" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" required></div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      </div>
    </div>
  </div>




</body>

</html>