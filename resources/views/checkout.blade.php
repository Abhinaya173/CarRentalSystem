<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Checkout Mobil</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="/css/checkout.css" rel="stylesheet">
  </head>
    
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>Checkout form</h2>
      <p class="lead">Silahkan masukan data dan jika perlu bantuan silahkan hubungi +62 2311241</p>
    </div>
    
    <form action="/checkout" method="post">
    @csrf
    <div class="row g-5">
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Data Customer</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">

            <div class="col-sm-6">
              <label for="carid" name="cars_id" class="form-label">Mobil Id</label>
              <p>{{ $car->id }}</p>
            </div>

            <div class="col-sm-6">
              <label for="userid" name="user_id" class="form-label">Customer Id</label>
              <p>{{ $user->id }}</p>
            </div>

            <div class="col-sm-6">
              <label for="carname" class="form-label">Nama Mobil</label>
              <p>{{ $car->nama }}</p>
            </div>

            <div class="col-sm-6">
              <label for="carmerk" class="form-label">Merk Mobil</label>
              <p>{{ $car->merk }}</p>
            </div>

            <div class="col-sm-6">
              <label for="name" class="form-label">Nama</label>
              <p>{{ $user->name }}</p>
            </div>

            <div class="col-sm-6">
              <label for="userame" class="form-label">Username</label>
              <p>{{ $user->username }}</p>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <p>{{ $user->email }}</p>
            </div>

            <div class="col-12">
              <label for="address" name="address" class="form-label">Alamat</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-12">
              <label for="phone" name="phone" class="form-label">No Telepon</label>
              <input type="text" class="form-control" id="phone" required>
              <div class="invalid-feedback">
                Please enter your phone number.
              </div>
            </div>
            
          <hr class="my-4">

          <h4 class="mb-3">Pembayaran</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Tunai</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Atm</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
          </div>

          <hr class="my-4">

                 <!-- Input tanggal peminjaman -->
                <div class="col-12">
                    <label for="start_date" name="start_date" class="form-label">Tanggal Peminjaman</label>
                    <input type="date" class="form-control datepicker" id="start_date" name="start_date" required>
                    <div class="invalid-feedback">
                        Please enter date.
                    </div>
                </div>

                <!-- Input tanggal pengembalian -->
                <div class="col-12">
                    <label for="end_date" name="end_date" class="form-label">Tanggal Pengembalian</label>
                    <input type="date" class="form-control datepicker" id="end_date" required>
                    <div class="invalid-feedback">
                        Please enter date.
                    </div>
                </div>

                <div class="col-12">
                    <label for="total_harga" name="total_harga" class="form-label">Total Harga</label>
                    <p>Rp.{{ $car->biaya_sewa }}/days</p>
                </div>
    
                <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
        </form>
      </div>
    </div>
    </form>
  </main>

  <footer class="my-5 pt-5 text-body-secondary text-center text-small">
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="/js/checkout.js"></script></body>
</html>
