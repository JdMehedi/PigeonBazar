<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        
        <link rel="stylesheet" href="<?php echo e(asset('css/toastr.min.css')); ?>">
       

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <a class="navbar-brand" href="<?php echo e(route('index')); ?>">Pets Bazar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo e(route('index')); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Category<span class="sr-only">(current)</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Pigeon</a>
                <a class="dropdown-item" href="#">Birds</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Dog</a>
                <a class="dropdown-item" href="#">Cats</a>
              </div>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
            </li>

          
           
            
          </ul>
          <form class="form-inline my-2 my-lg-0" method="GET" action="<?php echo e(route('results')); ?>">
            <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>

          
        </div>
      </nav>

    <?php if(Session::has('success')): ?>
    
    <div class="alert alert-success">
        <?php echo e(Session::get('success')); ?>

    </div>

    <?php endif; ?>

     

    
    <script src="<?php echo e(asset('js/app.js')); ?>" ></script>
</body><?php /**PATH C:\xampp\htdocs\Pigeonbazar\resources\views/layouts/boot.blade.php ENDPATH**/ ?>