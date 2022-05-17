@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$p[0]->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                 

                        <br> name : {{$p[0]->name}}
                        <br> Description :  {{$p[0]->Description}}
                        <br> Price : {{$p[0]->Price}}
                        <br> <img src="{{$p[0]->Image}}" width="100" height="100">
 
                         
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
