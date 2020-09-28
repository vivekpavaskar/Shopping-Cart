<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="btn btn-primary" href="/showCart">
            <span class="badge badge-pill badge-danger">
                {{ Session::has('cart') ? Session::get('cart')->totalQty : 0 }}
            </span>
            Your Cart
        </a>
    </nav>
    <a class="btn btn-outline-primary" href="/">Sign up</a>
</div>
