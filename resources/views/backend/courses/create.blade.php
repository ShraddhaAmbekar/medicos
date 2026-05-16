@extends('backend.layouts.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary card">
                <div class="panel-heading text-center card-header"
                    style="font-size: 18px; font-weight: 700;background:#2c8f7b;color:white;">Enter Course Details</div>
                <div class="product-form card-body">
                    <p class="text-center text-danger"></p>
                    <form action="{{ route('courses.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row" style="font-size: 18px;">
                            <!--**************************--->
                            <div class="col-sm-6 mt-3">
                                <label for="name">Course Name</label>
                                <input type="text" name="course_name" id="name" class="form-control"
                                    placeholder="Enter Course Name"
                                    value="{{ $country->course_name ?? old('course_name') }}">
                                @error('course_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-sm-4 mt-3">
                                <label for="name">Course Image</label>
                                <input type="file" name="image" class="form-control">
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
