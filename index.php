<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container-fluid p-5 bg-primary text-white text-center">
    <h1>My First Bootstrap Page</h1>
    <p>Resize this responsive page to see the effect!</p>
  </div>
  //test
  <div class="container p-5">

    <div class="container mx-auto p-2 text-center w-50">
      <p class="h2 text-primary">Home Page</p>
      <img src="im.jpg" class="img-fluid img-rounded rounded-2 ">
    </div>

    <div class="container w-50 m-2 mx-auto p-5 bg-danger rounded-5 text-light">
      <form>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control form-control-sm w-75" name="username" id="username">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control form-control-sm w-75" name="password" id="password">
        </div>

        <input type="submit" class="btn btn-sm btn-primary mt-3">
      </form>
    </div>

    <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="im.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="im.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="im.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <table class="table table-dark table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
    <div class="container bg-info p-5 rounded-4">
      <div class="row">
        <div class="col-4">
          <img src="im.jpg" class="img-fluid img-rounded rounded-2">
        </div>
        <div class="col-4">
          <img src="im.jpg" class="img-fluid img-rounded rounded-2">
        </div>
        <div class="col-4">
          <img src="im.jpg" class="img-fluid img-rounded rounded-2">
        </div>
      </div>

    </div>

  </div>

</body>

</html>