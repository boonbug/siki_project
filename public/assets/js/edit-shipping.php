<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Edmin admin is super flexible, powerful, clean &amp; modern responsive bootstrap admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Edmin admin template, best javascript admin, dashboard template, bootstrap admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <title>edit shipping</title>
    <!-- Favicon icon-->
    <link rel="icon" href="assets/images/favicon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon/favicon.png" type="image/x-icon">
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <!-- Font awesome icon css -->
    <link rel="stylesheet" href="assets/css/vendors/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/css/vendors/@fortawesome/fontawesome-free/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/vendors/@fortawesome/fontawesome-free/css/brands.css">
    <link rel="stylesheet" href="assets/css/vendors/@fortawesome/fontawesome-free/css/solid.css">
    <link rel="stylesheet" href="assets/css/vendors/@fortawesome/fontawesome-free/css/regular.css">
    <!-- Ico Icon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/@icon/icofont/icofont.css">
    <!-- Flag Icon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/flag-icon.css">
    <!-- Themify Icon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify-icons/themify-icons/css/themify.css">
    <!-- Animation css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css/animate.css">
    <!-- Whether Icon css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/weather-icons/css/weather-icons.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
    <!-- Dropzone css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/dropzone/dist/dropzone.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
    <!-- Whether Icon css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/weather-icons/css/weather-icons.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/filepond/filepond.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/filepond/filepond-plugin-image-preview.css">
    <!-- App css-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/coustom.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
</head>

<body>


    <main class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page header start -->
        <?php require_once('menu.php');?>
        <!-- Page header end-->
        <div class="page-body-wrapper">
            <?php require_once('sidebar.php');?>
            <div class="page-body">
                <div class="container-fluid">
                    <div class="row page-title">
                        <div class="col-sm-6">
                            <h3>operations lording list</h3>
                        </div>
                        <div class="col-sm-6">
                            <nav>
                                <ol class="breadcrumb justify-content-sm-end align-items-center">
                                    <li class="breadcrumb-item"> <a href="">
                                            <svg class="svg-color">
                                                <use href="assets/svg/iconly-sprite.svg#Home"></use>
                                            </svg></a></li>
                                    <li class="breadcrumb-item">Add lording list</li>
                                   
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header pb-10">
                                <h4>add operations expenses</h4>

                            </div>
                            <div class="card-body checkbox-checked">
                                <form class="theme-form row g-3 needs-validation custom-input" novalidate="">
                                     <div class="col-3">
                                        <label class="form-label" for="validationCustom04">our reference</label>
                                        <select class="form-select" id="validationCustom04" required="">
                                            <option selected="" disabled="" value="">Choose...</option>
                                            <option>Admin </option>
                                            <option>shipping </option>
                                            <option>transporter</option>
                                           
                                        </select>
                                       
                                    </div>
                                     <div class="col-3">
                                        <label class="form-label" for="validationCustom04">client name</label>
                                        <select class="form-select" id="validationCustom04" required="">
                                            <option selected="" disabled="" value="">Choose...</option>
                                            <option>Admin </option>
                                            <option>shipping </option>
                                            <option>transporter</option>
                                           
                                        </select>
                                       
                                    </div>
                                     <div class="col-3">
                                        <label class="form-label" for="validationCustom04">Transporter name</label>
                                        <select class="form-select" id="validationCustom04" required="">
                                            <option selected="" disabled="" value="">Choose...</option>
                                            <option>Admin </option>
                                            <option>shipping </option>
                                            <option>transporter</option>
                                           
                                        </select>
                                       
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label" for="validationCustom04">Bill number</label>
                                        <select class="form-select" id="validationCustom04" required="">
                                            <option selected="" disabled="" value="">Choose...</option>
                                            <option>Admin </option>
                                            <option>shipping </option>
                                            <option>transporter</option>
                                           
                                        </select>
                                       
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label" for="validationCustom01">COO</label>
                                        <input class="form-control" id="validationCustom01" type="text" placeholder="COO" required="">
                                        
                                    </div>
                                    <div class="col-3">
                                        <label class="col-sm-12 col-form-label" for="inputPassword1">lording number</label>
                                        <input class="form-control" id="inputPassword1" type="text" placeholder="lording number" required="">
                                        
                                    </div>
                                    <div class="col-3">
                                        <label class="col-sm-12 col-form-label" for="inputPassword1">COD</label>
                                        <input class="form-control" id="inputPassword1" type="text" placeholder="COD" required="">
                                        
                                    </div>
                                    <div class="col-3">
                                        <label class="col-sm-12 col-form-label" for="inputPassword1">Manifest number</label>
                                        <input class="form-control" id="inputPassword1" type="text" placeholder="Manifest number" required="">
                                        
                                    </div>
                                     <div class="col-3">
                                        <label class="col-sm-12 col-form-label" for="inputPassword1">Entry number</label>
                                        <input class="form-control" id="inputPassword1" type="text" placeholder="Entry number" required="">
                                        
                                    </div>
                                    <div class="col-3">
                                        <label class="col-sm-12 col-form-label" for="inputPassword1">Manifest date</label>
                                        <input class="form-control" id="inputPassword1" type="date" placeholder="Manifest date" required="">
                                        
                                    </div>
                                    <div class="col-3">
                                        <label class="col-sm-12 col-form-label" for="inputPassword1">Entry date</label>
                                        <input class="form-control" id="inputPassword1" type="date" placeholder="Entry date" required="">
                                        
                                    </div>
                                    <div class="col-3">
                                        <label class="col-sm-12 col-form-label" for="inputPassword1">weight</label>
                                        <input class="form-control" id="inputPassword1" type="text" placeholder="weight" required="">
                                        
                                    </div>

                                    <div class="card-header pb-10">
                                <h4>Container Details</h4>

                            </div>
                                    <div class="row">
                                    <div class="col-3">
                                        <label class="col-sm-12 col-form-label" for="inputPassword1">Container number</label>
                                        <input class="form-control" id="inputPassword1" type="text" placeholder="Container number" required="">
                                        
                                    </div>
                                     <div class="col-3">
                                        <label class="form-label" for="validationCustom04">Size</label>
                                        <select class="form-select" id="validationCustom04" required="">
                                            <option selected="" disabled="" value="">Choose...</option>
                                            <option>Admin </option>
                                            <option>shipping </option>
                                            <option>transporter</option>
                                           
                                        </select>
                                       
                                    </div>
                                    </div>
                                     <div class="row">
                                    <div class="col-3">
                                        <label class="col-sm-12 col-form-label" for="inputPassword1">Container number</label>
                                        <input class="form-control" id="inputPassword1" type="text" placeholder="Container number" required="">
                                        
                                    </div>
                                     <div class="col-3">
                                        <label class="form-label" for="validationCustom04">Size</label>
                                        <select class="form-select" id="validationCustom04" required="">
                                            <option selected="" disabled="" value="">Choose...</option>
                                            <option>Admin </option>
                                            <option>shipping </option>
                                            <option>transporter</option>
                                           
                                        </select>
                                       
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-3">
                                        <label class="col-sm-12 col-form-label" for="inputPassword1">Container number</label>
                                        <input class="form-control" id="inputPassword1" type="text" placeholder="Container number" required="">
                                        
                                    </div>
                                     <div class="col-3">
                                        <label class="form-label" for="validationCustom04">Size</label>
                                        <select class="form-select" id="validationCustom04" required="">
                                            <option selected="" disabled="" value="">Choose...</option>
                                            <option>Admin </option>
                                            <option>shipping </option>
                                            <option>transporter</option>
                                           
                                        </select>
                                       
                                    </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Add Loading</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <?php require_once('footer.php');?>
        </div>
    </main>
    <!-- jquery-->
    <script src="assets/js/vendors/jquery/dist/jquery.min.js"></script>
    <!-- bootstrap js-->
    <script src="assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/config.js"></script>
    <!-- Sidebar js-->
    <script src="assets/js/sidebar.js"></script>
    <!-- scrollbar js-->
    <script src="assets/js/scrollbar/simplebar.js"></script>
    <script src="assets/js/scrollbar/custom.js"></script>

    <!-- Dropzone js-->
    <script src="assets/js/dropzone/dropzone.js"></script>
    <script src="assets/js/dropzone/dropzone-script.js"></script>
    <!-- Filepond js-->
    <script src="assets/js/filepond/filepond-plugin-image-preview.js"></script>
    <script src="assets/js/filepond/filepond-plugin-file-rename.js"></script>
    <script src="assets/js/filepond/filepond-plugin-image-transform.js"></script>
    <script src="assets/js/filepond/filepond.js"></script>
    <script src="assets/js/filepond/custom-filepond.js"></script>
    <!-- customizer-->
    <script src="assets/js/theme-customizer/customizer.js"></script>
    <!-- custom script -->
    <script src="assets/js/script.js"></script>
</body>

</html>