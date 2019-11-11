<form method="POST" action="{{ route('workspace.store') }}">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="name">Email address</label>
            <input type="text" class="form-control" id="name" placeholder="Enter workspace name" value="{{$workspace->name}}">
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
