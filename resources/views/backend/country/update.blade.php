@extends('backend.layouts.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary card">
                <div class="panel-heading text-center card-header"
                    style="font-size: 18px; font-weight: 700;background:#2c8f7b;color:white;">Enter County Details</div>
                <div class="product-form card-body">
                    <p class="text-center text-danger"></p>
                    <form action="{{ route('country.update', ['country' => $country->id]) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row" style="font-size: 18px;">
                            <!--**************************--->
                            <div class="col-sm-4 mt-3">
                                <label for="name">Country Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Enter Country Name" value="{{ $country->name ?? old('name') }}">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-4 mt-3">
                                <label for="name">Country Code</label>
                                <input type="text" name="code" id="code" class="form-control"
                                    placeholder="Enter Country Code" value="{{ $country->code ?? old('code') }}">
                                @error('code')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-sm-4 mt-3">
                                <label for="name">Country Flag</label>
                                <input type="file" name="flag" class="form-control"
                                    accept="image/png, image/jpg, image/jpeg">
                            </div>

                            <div class="col-sm-12 text-center" style="margin-top: 2%;">
                                <!--**************************--->
                                <div class="form-group center">
                                    <div class="col-sm-12" style="margin-bottom: 25px; margin-top: 20px;">
                                        <input type="submit" value="Save" class="btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
