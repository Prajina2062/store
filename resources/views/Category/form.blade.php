<form action="{{ route('Category.store') }}" method="POST">
    @csrf

    <div class="mb-3">
      <label for="name">Category Name:</label>
      <input id="name" type="text" name="name" value="{{ old('name') }}" class="form-control" required>
    </div>

    <div class="mb-3">
      <label>Status:</label><br>
      <label class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="status" value="1"
          @checked(old('status', '1') === '1')>
        Active
      </label>
      <label class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="status" value="0"
          @checked(old('status') === '0')>
        Inactive
      </label>
    </div>

    <button type="submit" class="btn btn-primary">Save Category</button>
  </form>
</div>
