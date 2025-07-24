
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">name</th>
      <th scope="col">price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @isset($products)
      @foreach ($products as $product)
        <tr>
          <th scope="row">{{ $product->id }}</th>
          <td>{{ $product->name }}</td>
          <td>{{ $product->price }}</td>
          <td>
            <button type="button" class="btn btn-outline-info">Edit</button>
          </td>
        </tr>
      @endforeach
    @endisset    
  </tbody>
</table>