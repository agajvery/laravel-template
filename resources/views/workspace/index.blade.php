@extends('adminlte.mainlayout')

@section('title', 'Workspace')

@section('content')

<div class="row">
    @foreach ($workspaces as $workspace)
        <p> {{ $workspace->name }}</p>
    @endforeach
</div>

@endsection
