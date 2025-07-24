
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @isset($storages)
        @foreach ($storages as $storage)
          <tr>
            <th scope="row">{{ $storage->id }}</th>
            <td>{{ $storage->name }}</td>
            <td>
              <button type="button" class="btn btn-outline-info">Edit</button>
            </td>
          </tr>
        @endforeach
      @endisset    
    </tbody>
  </table>