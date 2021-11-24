<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
</head>

<body>
<section>
    <header class="main-header">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand">Best store ever</a>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </nav>
    </header>

    <section class="content-message">
        <h1>The best products</h1>
        <p></p>
    </section>

    <div class="container">
        <h2>Miscellaneous</h2>
        <div class="row">
            <?php
            require_once("fakeproducts.php");
            foreach ($products

                     as $product) {
                ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2 p-2">
                    <div class="card product-card h-100">
                        <div class="card-body">
                            <img src="<?= $product->image ?>" alt="<?= $product->title ?>" title="?=$product->title?"
                                 class="card-img-top">
                            <p><?= $product->title ?></p>
                            <p><small><?= $product->category ?></small></p>
                        </div>
                        <div class="card-footer">
                            <span class="price float-start"><?= number_format($product->price, 2, '.') ?></span>
                            <button class="btn btn-secondary float-end"> +</button>
                        </div>

                    </div>
                </div>
                <?php
            }
            ?>
        </div>

</section>

<footer>
    <div class="bg-light text-center p-3">
        <i class="fa-twitter fa-brands fa-2x"></i>
        <i class="fa-facebook fa-brands fa-2x"></i>
        <i class="fa-instagram fa-brands fa-2x"></i>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>