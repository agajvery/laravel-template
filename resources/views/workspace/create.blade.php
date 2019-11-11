@extends('adminlte.mainlayout')

@section('title', 'Workspace')

@section('content')
    <h1>Create Workspace</h1>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Create Workspace</h3>
        </div>
        @include('workspace.form')
    </div>
@endsection


