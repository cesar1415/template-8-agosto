@extends('layouts.admin')
@section('title','Acerca de')
@section('styles')
<style type="text/css">
.unstyled-button{
    border: none;
    padding: 0;
    background: none;
}
</style>

@endsection
@section('content')
<div class="content-wrapper">
        <h1>
            Pagina Acerca de
        </h1>
        <hr>
        <h3>ACERCA DE</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum minus nemo incidunt provident molestias cupiditate, deserunt placeat eaque! Culpa repellendus mollitia officia hic recusandae, aperiam blanditiis ut distinctio dignissimos nisi.</p>
@endsection
@section('scripts')
<script src="{{asset('melody/js/profile-demo.js') }}"></script>
<script src="{{asset('melody/js/data-table.js') }}"></script>
@endsection
