<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
<a href="{{ route('loan.create') }}" class="btn btn-info">Add</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Client Name</th>
      <th scope="col">Amount</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($prazina as $abc)
    <tr>
      <th scope="row">{{ $abc->id }}</th>
        <td> {{ $abc->Client->name }} </td>
        <td>{{ $abc->amount }} </td>
        <td>{{ $abc->created_at->format('Y-m-d')}} </td>

    </tr>
    @endforeach
  </tbody>
</table>