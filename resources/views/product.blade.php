<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SHOTEE</title>
    
    <link rel="icon" type="image/x-icon" href="https://1000logos.net/wp-content/uploads/2021/02/Shopee-logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body> 
  <div class="font-monospace">
    <nav class="container-fluid navbar navbar-expand-lg bg-warning">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">SHOTEE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link text-dark" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item text-dark">
              <a class="nav-link" href="/products">Shop</a>
            </li> 
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="mt-3">
        <a href="/products" class="text-decoration-none h"><i class="fa-solid fa-left-long "></i> <span class="">Go Back</span></a>
      </div>

      <div class="d-flex justify-content-center gap-5 mt-3">
          <div class="card shadow" style="width: 20rem;">
          <img src={{$product['productImage']}} class="card-img-top mb-0 img-fluid" alt={{$product['productName']}}>
          <p class="card-text m-0 bg-warning text-center p-1 fw-bold">{{$product['productDiscount']}}</p>
          <div class="card-body">
            <h5 class="card-title m-0 mb-2">{{$product['productName']}}</h5>
            <h6 class="card-text m-0 mb-2 text-danger"><span class="lead fw-bold">&#8369;</span> {{$product['productPrice']}}</h6>
            <p class="card-text m-0 mb-2">
              <i class="fa-sharp fa-solid fa-star text-warning"></i>
              <i class="fa-sharp fa-solid fa-star text-warning"></i>
              <i class="fa-sharp fa-solid fa-star text-warning"></i>
              <i class="fa-sharp fa-solid fa-star text-warning"></i>
              <i class="fa-sharp fa-solid fa-star text-warning"></i>
              {{$product['soldItems']}}K sold
            </p>
            <p class="card-text m-0">{{$product['sellerLocation']}}</p>
          </div>
          </div>
      </div>
      <p class="mt-3"><span class="lead my-3 fw-light">Product Description: </span>{{$product['productDescription']}}</p>
    </div>
    <footer>
      <p class="bg-warning text-center p-3 mt-5 mb-0">All Rights Reserved.</p>
    </footer>  
  </div>
</body>
</html>