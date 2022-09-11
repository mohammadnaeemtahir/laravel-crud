@extends('layouts.app', ['title' => 'Update Customer Info'])

@section('content')
<div class="container">
    <div class="card p-4 shadow">
        <h3 class="text-center text-wrap fw-bold">{{'Update Customer Information'}}</h3>
        <form action="{{route('customer.update', ['id' => $customer->customer_id])}}" method="post">
            @csrf
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="full_name" class="form-label">{{__('Full Name')}} <span class="text-danger">{{__('*')}}</span></label>
                    <input type="text" name="full_name" class="form-control" placeholder="Enter your full name" value="{{$customer->full_name}}">
                    <span class="text-danger">
                        @error('full_name')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="email" class="form-label">{{__('Email')}} <span class="text-danger">{{__('*')}}</span></label>
                    <input type="email" name="email" class="form-control" placeholder="i.e. example@email.com" value="{{$customer->email}}">
                    <span class="text-danger">
                        @error('email')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="phone_number" class="form-label">{{__('Phone Number')}} <span class="text-danger">{{__('*')}}</span></label>
                    <input type="tel" name="phone_number" class="form-control" placeholder="Enter your valid phone number" value="{{$customer->phone_number}}">
                    <span class="text-danger">
                        @error('phone_number')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="age" class="form-label">{{__('Age')}} <span class="text-danger">{{__('*')}}</span></label>
                    <input type="number" name="age" class="form-control" placeholder="Enter your age (number)" value="{{$customer->age}}">
                    <span class="text-danger">
                        @error('age')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">{{__('Address')}} <span class="text-danger">{{__('*')}}</span></label>
                    <textarea name="address" class="form-control" placeholder="Enter your current address" value="{{$customer->address}}"></textarea>
                    <span class="text-danger">
                        @error('address')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="password" class="form-label">{{__('Password')}} <span class="text-danger">{{__('*')}}</span></label>
                    <input type="password" name="password" class="form-control" placeholder="Choose your password)">
                    <span class="text-danger">
                        @error('password')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="confirm_password" class="form-label">{{__('Confirm Password')}} <span class="text-danger">{{__('*')}}</span></label>
                    <input type="password" name="confirm_password" class="form-control" placeholder="Confirm your password">
                    <span class="text-danger">
                        @error('confirm_password')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <button type="submit" class="btn btn-primary">{{__('Update')}}</button>
            </div>
        </form>
    </div>
</div>
@endsection
