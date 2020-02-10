@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Please import User Data
        </div>
        <div class="card-body">
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="button is-link">Import User Data</button>
                <a id="custom-button" href="/customers"><span class="button is-link">Return</span></a>
            </form>
        </div>
    </div>
</div>
@endsection
