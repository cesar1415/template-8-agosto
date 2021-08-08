@extends('layouts.admin')
@section('title','Index')
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
            Pagina Index
        </h1>
        <hr>
        <h3>INDEX</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum minus nemo incidunt provident molestias cupiditate, deserunt placeat eaque! Culpa repellendus mollitia officia hic recusandae, aperiam blanditiis ut distinctio dignissimos nisi.</p>



</div>

@endsection
@section('scripts')
<script src="{{asset('melody/js/profile-demo.js') }}"></script>
<script src="{{asset('melody/js/data-table.js') }}"></script>
@endsection
