<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>books home</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <?php $arr = [
        ['book_image' => 'https://i.pinimg.com/originals/3f/56/fd/3f56fdacff697f8b003b7882aae2f179.jpg', 'book_title' => 'United info' , 'book_author'=>'laith' , 'book_description'=>'discrrrrr'],
        ['book_image' => 'https://i.pinimg.com/736x/89/7c/3a/897c3ad56007042c529094c7e1b0553d--multimedia-design-typo-poster.jpg', 'book_title' => 'United info2' , 'book_author'=>'laith' , 'book_description'=>'discrrrrr222'],
        ['book_image' => 'https://visme.co/blog/wp-content/uploads/2021/06/the-godfather-book-cover.png', 'book_title' => 'United info3' , 'book_author'=>'laith' , 'book_description'=>'discrrrrr3333'],
        ['book_image' => 'https://www.adobe.com/express/create/cover/media_181e3d2c78f153ae7bf0e19a2faeb9a76e234da30.jpeg?width=400&format=jpeg&optimize=medium', 'book_title' => 'United info4' , 'book_author'=>'laith' , 'book_description'=>'discrrrrr444']

      ]; ?>

@foreach ($allBook as $item)
      <div class="card card d-inline-flex p-2 " style="width: 18rem;">
        <img src="{{$item['book_image']}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$item['book_title']}}</h5>
          <p class="card-text">{{$item['book_author']}} </p>
          <p class="card-text">{{$item['book_description']}} </p>
          <a href="#" class="btn btn-primary">delete</a>
          <a href="#" class="btn btn-primary">update</a>
        </div>
      </div>
@endforeach

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>