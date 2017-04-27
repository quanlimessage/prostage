@extends('admin.master')
@section('content')
<main id="main">
    <form action="" method="POST" role="form">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
    </form>
</main>
@endsection