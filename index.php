<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Website using PHP and MySQL</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap -->
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font-awesome -->
    <link rel="stylesheet" href="/css/index.css">
</head>

<body>
    <!-- navbar  -->
    <div class="container-fluid p-0">
        <!-- first-child -->
        <nav class="navbar navbar-expand-lg bg-info">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="image/fashion-logo-design-hanger.webp" alt=""
                        style="width:80px; height:80px; border-radius:60%;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/product">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/resgister">Resgister</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/cart"><i
                                    class="fa-solid fa-cart-shopping"></i> <sup>0</sup></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/total_prce">Total Price:
                                <span>100/-</span></a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <!-- secondchild -->
    <nav class="navbar navbar-expand-lg bg-dark py-3">
        <div class="m-0 p-0">
            <ul class="d-flex gap-2 align-items-center m-0" style="text-decoration: none; list-style:none; ">
                <li class=" "><a href="" class="text-white"
                        style="outline:none; text-decoration:none; color:black; font-weight:500;">Welcome
                        Guest</a>
                </li>
                <li class=""><a href="" class="text-white "
                        style="outline:none; text-decoration:none; color:black; font-weight:400;">Login</a></li>
                <li><a href="" class="text-white"
                        style="outline:none; text-decoration:none; color:black;font-weight:400;">Sing-up</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- ThirdChild -->
    <section class="container-fluid">
        <div>
            <h4>Hidden Store</h4>
            <p>Communication is at the heart of e-commerce and community</p>
            <div class="d-flex">
                <div class="w-75">
                    <div class="row g-3">
                        <div class="col-4">
                            <div class="p-3">
                                <div><img src="image/apple_juice.webp" alt="" class="w-100 d-block"></div>
                                <div class=" mt-3">
                                    <h5 class="m-0">Apple Juice</h5>
                                    <p class="m-0  my-2" style="font-size: 14px;">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Mollitia voluptatibus
                                        omnis numquam!</p>
                                    <p class="m-0 mb-2" style="font-size: 14px;"><span class="fw-semibold">Price:</span>
                                        500/-</p>
                                    <button class="bg-info px-2 py-1 text-white" style="border:none;">Add to
                                        cart</button>
                                    <button class="bg-dark px-2 py-1 text-white" style="border:none;">View more</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-3">
                                <div>
                                    <img src="image/black_dress.webp" alt="" class="w-100 d-block">
                                </div>
                                <div class=" mt-3">
                                    <h5 class="m-0">Apple Juice</h5>
                                    <p class="m-0  my-2" style="font-size: 14px;">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Mollitia voluptatibus
                                        omnis numquam!</p>
                                    <p class="m-0 mb-2" style="font-size: 14px;"><span class="fw-semibold">Price:</span>
                                        500/-</p>
                                    <button class="bg-info px-2 py-1 text-white" style="border:none;">Add to
                                        cart</button>
                                    <button class="bg-dark px-2 py-1 text-white" style="border:none;">View more</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-3">
                                <div>
                                    <img src="image/khakhi_pants_for_men.jpg" alt="" class="w-100 d-block">
                                </div>
                                <div class=" mt-3">
                                    <h5 class="m-0">Apple Juice</h5>
                                    <p class="m-0  my-2" style="font-size: 14px;">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Mollitia voluptatibus
                                        omnis numquam!</p>
                                    <p class="m-0 mb-2" style="font-size: 14px;"><span class="fw-semibold">Price:</span>
                                        500/-</p>
                                    <button class="bg-info px-2 py-1 text-white" style="border:none;">Add to
                                        cart</button>
                                    <button class="bg-dark px-2 py-1 text-white" style="border:none;">View more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="p-3">
                                <div><img src="image/healthy-food-vegetarian-cuisine-meal.jpg" alt=""
                                        class="w-100 d-block"></div>
                                <div class=" mt-3">
                                    <h5 class="m-0">Apple Juice</h5>
                                    <p class="m-0  my-2" style="font-size: 14px;">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Mollitia voluptatibus
                                        omnis numquam!</p>
                                    <p class="m-0 mb-2" style="font-size: 14px;"><span class="fw-semibold">Price:</span>
                                        500/-</p>
                                    <button class="bg-info px-2 py-1 text-white" style="border:none;">Add to
                                        cart</button>
                                    <button class="bg-dark px-2 py-1 text-white" style="border:none;">View more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="p-3">
                                <div><img src="image/blue-200.avif" alt="" class="w-100 d-block"></div>
                                <div class=" mt-3">
                                    <h5 class="m-0">Apple Juice</h5>
                                    <p class="m-0  my-2" style="font-size: 14px;">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Mollitia voluptatibus
                                        omnis numquam!</p>
                                    <p class="m-0 mb-2" style="font-size: 14px;"><span class="fw-semibold">Price:</span>
                                        500/-</p>
                                    <button class="bg-info px-2 py-1 text-white" style="border:none;">Add to
                                        cart</button>
                                    <button class="bg-dark px-2 py-1 text-white" style="border:none;">View more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="p-3">
                                <div><img src="image/girlclothes.webp" alt="" class="w-100 d-block"></div>
                                <div class=" mt-3">
                                    <h5 class="m-0">Apple Juice</h5>
                                    <p class="m-0  my-2" style="font-size: 14px;">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Mollitia voluptatibus
                                        omnis numquam!</p>
                                    <p class="m-0 mb-2" style="font-size: 14px;"><span class="fw-semibold">Price:</span>
                                        500/-</p>
                                    <button class="bg-info px-2 py-1 text-white" style="border:none;">Add to
                                        cart</button>
                                    <button class="bg-dark px-2 py-1 text-white" style="border:none;">View more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="p-3">
                                <div><img src="image/yellow-MODEL.avif" alt="" class="w-100 d-block"></div>
                                <div class=" mt-3">
                                    <h5 class="m-0">Apple Juice</h5>
                                    <p class="m-0  my-2" style="font-size: 14px;">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Mollitia voluptatibus
                                        omnis numquam!</p>
                                    <p class="m-0 mb-2" style="font-size: 14px;"><span class="fw-semibold">Price:</span>
                                        500/-</p>
                                    <button class="bg-info px-2 py-1 text-white" style="border:none;">Add to
                                        cart</button>
                                    <button class="bg-dark px-2 py-1 text-white" style="border:none;">View more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="p-3">
                                <div><img src="image/western_dress.webp" alt="" class="w-100 d-block"></div>
                                <div class=" mt-3">
                                    <h5 class="m-0">Apple Juice</h5>
                                    <p class="m-0  my-2" style="font-size: 14px;">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Mollitia voluptatibus
                                        omnis numquam!</p>
                                    <p class="m-0 mb-2" style="font-size: 14px;"><span class="fw-semibold">Price:</span>
                                        500/-</p>
                                    <button class="bg-info px-2 py-1 text-white" style="border:none;">Add to
                                        cart</button>
                                    <button class="bg-dark px-2 py-1 text-white" style="border:none;">View more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="p-3">
                                <div><img src="image/seasoned-boiled-cockies-korean-food.jpg" alt=""
                                        class="w-100 d-block"></div>
                                <div class=" mt-3">
                                    <h5 class="m-0">Apple Juice</h5>
                                    <p class="m-0  my-2" style="font-size: 14px;">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Mollitia voluptatibus
                                        omnis numquam!</p>
                                    <p class="m-0 mb-2" style="font-size: 14px;"><span class="fw-semibold">Price:</span>
                                        500/-</p>
                                    <button class="bg-info px-2 py-1 text-white" style="border:none;">Add to
                                        cart</button>
                                    <button class="bg-dark px-2 py-1 text-white" style="border:none;">View more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="p-3">
                                <div><img src="image/pngtree-healthy-food-png-image.jpg" alt="" class="w-100 d-block">
                                </div>
                                <div class=" mt-3">
                                    <h5 class="m-0">Apple Juice</h5>
                                    <p class="m-0  my-2" style="font-size: 14px;">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Mollitia voluptatibus
                                        omnis numquam!</p>
                                    <p class="m-0 mb-2" style="font-size: 14px;"><span class="fw-semibold">Price:</span>
                                        500/-</p>
                                    <button class="bg-info px-2 py-1 text-white" style="border:none;">Add to
                                        cart</button>
                                    <button class="bg-dark px-2 py-1 text-white" style="border:none;">View more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-25">
                    <ul class="fs-5" style="list-style: none; text-decoration:none; line-height:2;">
                        <h4>Delivery Brands</h4>
                        <li>Mc Donalds</li>
                        <li>Zomato</li>
                        <li>Alahabadi</li>
                        <li>Nike</li>
                        <li>Adidas</li>
                        <li>Amazon</li>
                        <li>flipkart</li>
                        <li>Swiggy</li>
                        <li>Categories</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <footer class="bg-info py-4 mt-2" style="font-size: 17px; font-weight:500;">
        <div class="d-flex align-items-center justify-content-center fs-6">
            <p class="m-0">All Right Reserved</p>
            <p class="m-0"><span>&#169;</span> Desinged by Vipul-2024</p>
        </div>
    </footer>
    <!-- Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS-->
</body>

</html>