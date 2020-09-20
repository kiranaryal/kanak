@extends('master')

@section('content')









<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Customer</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>customerName</td>
          <td>Email</td>
          <td>occupation</td>
          <td>address</td>
          <td>mobile</td>
          <td>image</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($customers  as $customer)
        <tr>
            <td>{{$customer->id}}</td>
            <td>{{$customer->customerName}}
            </td>
            <td>
             {{$customer->address}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->occupation}}</td>
           
            <td>{{$customer->mobile}}</td>
            <td>{{$customer->image}}</td>
  
            </td>          <td>
                <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('customer.destroy', $customer->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  {{ csrf_field() }} {{ method_field('DELETE') }} 
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form> 
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>




<form action="" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Add New customer</h1>
                </div>
                <div class="form-group row">
                    <label for="customerName" class="col-md-4 col-form-label">customerName</label>

                    <input id="customerName"
                           type="text"
                           class="form-control{{ $errors->has('customerName') ? ' is-invalid' : '' }}"
                           name="customerName"
                           
                           autocomplete="customerName" autofocus>

                    @if ($errors->has('customerName'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('customerName') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group row">
                    <label for="address" class="col-md-4 col-form-label">address</label>

                    <input id="address"
                           type="text"
                           class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"
                           name="address"
                           
                           autocomplete="address" autofocus>

                    @if ($errors->has('address'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group row">
                    <label for="organization" class="col-md-4 col-form-label">organization</label>

                    <input id="organization"
                           type="text"
                           class="form-control{{ $errors->has('organization') ? ' is-invalid' : '' }}"
                           name="organization"
                          
                           autocomplete="organization" autofocus>

                    @if ($errors->has('organization'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('organization') }}</strong>
                        </span>
                    @endif
                </div>   
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label">email</label>

                    <input id="email"
                           type="text"
                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                           name="email"
                          
                           autocomplete="email" autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group row">
                    <label for="mobile" class="col-md-4 col-form-label">mobile</label>

                    <input id="mobile"
                           type="text"
                           class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}"
                           name="mobile"
                          
                           autocomplete="mobile" autofocus>

                    @if ($errors->has('mobile'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('mobile') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group row">
                <label for="image" class="col-md-4 col-form-label">image</label>
                <input id="image"
                           type="text"
                           class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}"
                           name="image"
                           
                           autocomplete="image" autofocus>

                    @if ($errors->has('image'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                    @endif
                </div>



                <div class="row pt-4">
                    <button class="btn btn-primary">Add New customer</button>
                </div>

            </div>
        </div>
    </form>














def











@endsection