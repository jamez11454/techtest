@extends('layouts.app')
@section('content')
<div id="button-container">
    <a id="custom-button" href="/customers"><span class="button is-link">View Customer Records</span></a>
    <a id="custom-button" href="/customers/import"><span class="button is-link">Upload New Records</span></a>
</div>
@endsection
