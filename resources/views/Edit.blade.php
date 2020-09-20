@extends('Master')

@section('content')




<form action="{{ route('customer.update', $customer->id) }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>edit customer</h1>
                </div>
                <div class="form-group row">
                    <label for="customerName" class="col-md-4 col-form-label">customerName</label>

                    <input id="customerName"
                           type="text"
                           class="form-control{{ $errors->has('customerName') ? ' is-invalid' : '' }}"
                           name="customerName"
                          value="{{ $customer->customerName }}" 
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
                           value="{{ $customer->address }}" 
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
                           value="{{ $customer->organization }}" 
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
                           value="{{ $customer->email}}" 
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
                           value="{{ $customer->mobile }}" 
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
                           value="{{ $customer->image }}" 
                           autocomplete="image" autofocus>

                    @if ($errors->has('image'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                    @endif
                </div>
               



                <div class="row pt-4">
                    <button class="btn btn-primary">edit customer</button>
                </div>

            </div>
        </div>
    </form>







def















@endsection