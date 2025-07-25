<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Basic ERP</title>

      @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
      <div class="container-fluid text-center">
          <div class="row align-items-center m-5 px-4">
              <div class="col p-4">
                <div class="row">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Create Product</button>
                </div>
                <br>
                <div class="row">
                  @include('components.table',[
                    'labels' => [
                      'id' => 'ID',
                      'name' => 'Name',
                      'price' => 'Price'
                    ],
                    'datas' => ($products ?? [])
                  ]) 
                </div>
              </div>
              <div class="col p-4">
                <div class="row">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#storageModal">Create storage</button>
                </div><br>
                <div class="row">
                  @include('components.table',[
                    'labels' => [
                      'id' => 'ID',
                      'name' => 'Name',
                    ],
                    'datas' => ($storages ?? [])
                  ]) 
                </div>
              </div>
              <div class="col p-4">
                <div class="row">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#couponModal">Create coupons</button>
                </div><br>
                <div class="row">
                  @include('components.table', [
                    'labels' => [
                      'id' => 'ID',
                      'name' => 'Name',
                      'porcetage' => 'Porcetage',
                    ],
                    'datas' => ($coupons ?? [])
                  ]) 
                </div>
              </div>
            </div>
      </div>
      
      @include('product.create') 
      @include('storage.form') 
      @include('coupon.create')
  </body>
</html>
