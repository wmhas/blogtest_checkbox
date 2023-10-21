
@extends('layouts.app')
@push('style')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

          <legend style="color: green; font-weight: bold;">LARAVEL 7.X CRUD EXAMPLE - CODECHIEF
           <a href="{{ route('customer.list') }}" style="float: right; display: block;color: white; background-color: green; padding: 1px 5px 1px 5px; text-decoration: none; border-radius: 5px; font-size: 17px;"> CUSTOMER LIST</a>
          </legend>

            <div class="form-group">
              <label for="">Name</label>
              <input type="text" class="form-control" name="name" value="{{ $customer->name}}">
              <font style="color:red"> {{ $errors->has('name') ?  $errors->first('name') : '' }} </font>
            </div>

            <div class="form-group">
              <label for="">Email</label>
              <input type="email" class="form-control" name="email" value="{{ $customer->email }}">
              <font style="color:red"> {{ $errors->has('email') ?  $errors->first('email') : '' }} </font>
            </div>

            <div class="form-group">
              <label><strong>Category :</strong></label><br>
              <label><input type="checkbox" name="category[]" 
                  value="Red" {{ in_array('Red', json_decode($customer->category)) ? 'checked' : '' }}> Red</label>
              <label><input type="checkbox" name="category[]" 
                value="Blue"  {{ in_array('Blue', json_decode($customer->category)) ? 'checked' : '' }}> Blue</label>
              <label><input type="checkbox" name="category[]" 
                value="Green"  {{ in_array('Green', json_decode($customer->category)) ? 'checked' : '' }}> Green</label>

              <label><input type="checkbox" name="category[]" 
                  value="Yellow"  {{ in_array('Yellow', json_decode($customer->category)) ? 'checked' : '' }}> Yellow</label>
              <label><input type="checkbox" name="category[]" 
                  value="White"  {{ in_array('White', json_decode($customer->category)) ? 'checked' : '' }}> white</label>
              <label><input type="checkbox" name="category[]" 
                  value="Black"  {{ in_array('Black', json_decode($customer->category)) ? 'checked' : '' }}> Black</label> 
          </div>  
            
            <div class="form-group" style="margin-top: 24px;">
              <a href="{{ route('customer.list') }}" class="btn btn-success">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
 