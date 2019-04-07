@extends('admin.layout.admin')
@section('content')
    <h3>Add Product</h3>
    <div class="row">

    {!! Form::open(['route'=>'product.create','method'=>'post','files'=>true]) !!}
        @csrf

        <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name',null,array('class'=>'form-control'))}}
        </div>
        <div class="form-group">
            {{form::label('description','Description')}}
            {{form::text('name',null,array('class'=>'form-control'))}}
        </div>
        <div class="form-group">
            {{Form::label('size','Size')}}
            {{Form::select('size',['small'=>'Small','medium'=>'Medium','large'=>'large'],null,array('class'=>'form-control'))}}
        </div>
        <div class="form-group">
            {{Form::label('category_id','categories')}}
            {{Form::select('category_id',$categories,null,array('class'=>'form-control','placeholder'=>'SecletCategory'))}}
        </div>
        <div class="form-group">
            {{Form::label('image','Image')}}
            {{Form::file('image',array('class'=>'form-control'))}}
        </div>
        {{Form::submit('Create',array('class'=>'btn btn-default'))}}

        {!! Form::Close() !!}

    </div>
@endsection
