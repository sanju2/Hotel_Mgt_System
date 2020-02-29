@extends('admin.dashboard')


@section('content')

<h3>Add product</h3>

<div class="row">


    {!! Form:: open(['route' => 'product.store','method'=> 'post','files'=> true])!!}

    {!! Form::close()!!}
</div>