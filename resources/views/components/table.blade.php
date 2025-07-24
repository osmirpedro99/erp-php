
<table class="table table-striped">
    <thead>
      <tr>
        @foreach ($labels as $item)
          <th scope="col">{{$item}}</th>    
        @endforeach
      </tr>
    </thead>
    <tbody>
      @isset($datas)
        @foreach ($datas as $data)
          <tr>
            @foreach ($labels as $key => $item)
              @if ($key == 0)
                <th scope="row">{{ $data->id }}</th>
              @endif
              <td>{{ $data->$key}}</td>
            @endforeach
            <td>
              <button type="button" class="btn btn-outline-info">Edit</button>
            </td>
          </tr>
        @endforeach
      @endisset    
    </tbody>
  </table>