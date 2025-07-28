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
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productFormModal">Create Product</button>
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
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#storageFormModal">Create storage</button>
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
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#couponFormModal">Create coupons</button>
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
      
      @include('components.form',[
        'formId'=> 'productFormModal',
        'title' => 'Product',
        'route' => "createProduct",
        'inputs' => [
            1 => ['id' => 'name', 'name'  => 'name', 'type'  => 'text', 'label' => 'Product name'],
            2 => ['id' => 'price', 'name'  => 'price', 'type'  => 'text', 'label' => 'Price'],
            3 => ['id' => 'quantity', 'name'  => 'quantity', 'type'  => 'text', 'label' => 'Quantity'],
          ]
      ])

      @include('components.form',[
        'formId'=> 'storageFormModal',
        'title' => 'Storage',
        'route' => "createStorage",
        'inputs' => [
            '0' => [
              'id'    => 'name',
              'name'  => 'name',
              'type'  => 'text',
              'label' => 'Storage name'
              ]
          ]
      ])

      @include('components.form',[
        'formId'=> 'couponFormModal',
        'title' => 'Coupon',
        'route' => "createCoupon",
        'inputs' => [
            1 => ['id' => 'name', 'name'  => 'name', 'type'  => 'text', 'label' => 'Coupon name'],
            2 => ['id' => 'porcetage', 'name'  => 'porcetage', 'type'  => 'text', 'label' => 'Porcetage'],
            3 => ['id' => 'quantity', 'name'  => 'quantity', 'type'  => 'text', 'label' => 'Quantity'],
            4 => ['id' => 'valid', 'name'  => 'valid', 'type'  => 'text', 'label' => 'Valid date'],
          ]
      ])

  </body>
</html>
