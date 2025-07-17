
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $d ) 
  <tr>
        <th scope="row">1</th>
      <td>{{ $d->name }}</td>
      @if ($d->status == '0')
        <td>inactive</td>
        @else
      <td>active</td>
      @endif
      <td>action</td>
       <a href="{{ route('Brand.edit',$d->id) }}">edit</a href>
    </tr>
      @endforeach
      
<a href="{{ route('Brand.create') }}" class="btn btn-info">add</a href>
  </tbody>
</table>