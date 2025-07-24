
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">name</th>
      <th scope="col">quantitu</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @isset($coupons)
      @foreach ($coupons as $coupon)
        <tr>
          <th scope="row">{{ $coupon->id }}</th>
          <td>{{ $coupon->name }}</td>
          <td>{{ $coupon->quantity }}</td>
          <td>
            <button type="button" class="btn btn-outline-info">Edit</button>
          </td>
        </tr>
      @endforeach
    @endisset    
  </tbody>
</table>