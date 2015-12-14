<!-- Bootstrap Core CSS -->
<link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{ asset('public/css/agency.css') }}" rel="stylesheet">

<div class="portfolio-modal" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <a href="/#produk">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
          </a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>{{ $products-> product_name }}</h2>
                        <p class="item-intro text-muted">&nbsp;</p>
                        <img class="img-responsive img-centered" style="width:auto;height:350px" src="{{ asset('backend/attachment') }}/{{ $products->filename }}" alt="{{ $products-> product_name }}">
                        <p>{{ $products->description }}</p>
                        <p><strong>Harga Rp. {{ number_format($products->selling_price) }}</p>
                          <div class="group-btn">
                            <a href="/#produk"><button class="btn btn-danger"> Batal </button></a>
                            <form action="/product/purchase/{{ $products->id }}" method="POST" style="display:inline;">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-success"> Beli </button>
                            </form>
                          </div>
                </div>
            </div>
        </div>
    </div>
</div>
