@extends('layouts.app')


@section('content')
<div class="container">
    <h1>Welcome to the Home Page</h1>
</div>
<div>
    <a class="btn btn-primary">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

</div>

@endsection