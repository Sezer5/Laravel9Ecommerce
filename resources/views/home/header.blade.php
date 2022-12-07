<!-- Topbar Start -->
<div class="container-fluid border-bottom d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-4 text-center py-2">
            <div class="d-inline-flex align-items-center">
                <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                <div class="text-start">
                    <h6 class="text-uppercase mb-1">Our Office</h6>
                    <span>123 Street, New York, USA</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 text-center border-start border-end py-2">
            <div class="d-inline-flex align-items-center">
                <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                <div class="text-start">
                    <h6 class="text-uppercase mb-1">Email Us</h6>
                    <span>info@example.com</span>
                    <span>info@example.com</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 text-center py-2">
            <div class="d-inline-flex align-items-center">
                <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                <div class="text-start">
                    <h6 class="text-uppercase mb-1">Call Us</h6>
                    <span>+012 345 6789</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
    <a href="{{asset('assets')}}/index.html" class="navbar-brand ms-lg-5">
        <h1 class="m-0 text-uppercase text-dark"><i class="bi bi-shop fs-1 text-primary me-3"></i>Pet Shop</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{asset('assets')}}/index.html" class="nav-item nav-link active">Home</a>
            <a href="{{asset('assets')}}/about.html" class="nav-item nav-link">About</a>
            <a href="{{asset('assets')}}/service.html" class="nav-item nav-link">Service</a>
            <a href="{{asset('assets')}}/product.html" class="nav-item nav-link">Product</a>
            <div class="nav-item dropdown">
                <a href="{{asset('assets')}}/#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="{{asset('assets')}}/price.html" class="dropdown-item">Pricing Plan</a>
                    <a href="{{asset('assets')}}/team.html" class="dropdown-item">The Team</a>
                    <a href="{{asset('assets')}}/testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="{{asset('assets')}}/blog.html" class="dropdown-item">Blog Grid</a>
                    <a href="{{asset('assets')}}/detail.html" class="dropdown-item">Blog Detail</a>
                </div>
            </div>
            <a href="{{asset('assets')}}/contact.html" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5">Contact <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>
</nav>
<!-- Navbar End -->