<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
<a href="{{ route('client.create') }}" class="btn btn-info">Add</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Account Number</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($clients as $client)
    <tr>
      <th scope="row">{{ $client->id }}</th>
      <td>{{ $client->name }}</td>
      <td>{{ $client->address }}</td>
      <td>{{ $client->account_no  }}</td>
    </tr>
    @endforeach
  </tbody>
</table>