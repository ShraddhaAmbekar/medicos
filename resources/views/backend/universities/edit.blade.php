@extends('backend.layouts.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary card">
                <div class="panel-heading text-center card-header"
                    style="font-size: 18px; font-weight: 700;background:#2c8f7b;color:white;">Enter University Details</div>
                <div class="product-form card-body">
                    <p class="text-center text-danger"></p>
                    <form action="{{ route('universities.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row" style="font-size: 18px;">
                            <!--**************************--->
                            <div class="col-sm-4 mt-3">
                                <label for="name">University Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Enter University Name" value="{{ $university->name ?? old('name') }}"
                                    required>
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-4 mt-3">
                                <label for="country_id">Country </label>
                                <select name="country_id" id="country_id" class="form-control" required>
                                    <option value="">select</option>
                                    @if (!empty($countries))
                                        @foreach ($countries as $val)
                                            <option value="{{ $val->id }}"
                                                {{ $val->id == $university->country_id ? 'selected' : '' }}>
                                                {{ $val->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('country_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-sm-4 mt-3">
                                <label for="name">University Logo</label>
                                <input type="file" name="logo" class="form-control"
                                    accept="image/png, image/jpg, image/jpeg">
                            </div>

                            <div class="col-sm-4 mt-3">
                                <label for="name">University Type</label>
                                <select name="university_type" id="" class="form-control" required>
                                    <option value="">select</option>
                                    <option value="Private" {{ $university->type == 'Privete' ? 'selected' : '' }}>Private
                                    </option>
                                    <option value="Government" {{ $university->type == 'Government' ? 'selected' : '' }}>
                                        Government</option>
                                </select>
                                @error('type')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>



                            <div class="col-sm-4 mt-3">
                                <label for="grade">Grade</label>
                                <input type="text" name="grade" id="grade" class="form-control"
                                    placeholder="Enter  Grade" value="{{ $university->grade ?? old('grade') }}">
                                @error('grade')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="col-sm-4 mt-3">
                                <label for="established_year">Established Year</label>
                                <input type="text" name="established_year" id="established_year" class="form-control"
                                    placeholder="Established Year "
                                    value="{{ $university->established_year ?? old('established_year') }}">
                                @error('established_year')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-sm-4 mt-3">
                                <label for="medium_of_instruction"> Medium of Instruction</label>
                                <input type="text" name="medium_of_instruction" id="medium_of_instruction"
                                    class="form-control" placeholder="Medium of Instruction"
                                    value="{{ $university->medium_of_instruction ?? old('medium_of_instruction') }}">
                                @error('medium_of_instruction')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-sm-4 mt-3">
                                <label for="ecfmg_status"> ECFMG Status</label>
                                <select name="ecfmg_status" id="" class="form-control" required>
                                    <option value="">select</option>
                                    <option value="1" {{ $university->ecfmg_status == '1' ? 'selected' : '' }}>
                                        Approved</option>
                                    <option value="0" {{ $university->ecfmg_status == '0' ? 'selected' : '' }}>Not
                                        Approved</option>
                                </select>
                                @error('ecfmg_status')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-sm-4 mt-3">
                                <label for="total_course_fees"> Total Course Fees</label>
                                <input type="text" name="total_course_fees" id="total_course_fees" class="form-control"
                                    placeholder="Total Course Fees"
                                    value="{{ $university->total_course_fees ?? old('total_course_fees') }}">
                                @error('total_course_fees')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>




                            <div class="col-sm-4 mt-3">
                                <label for="duration_of_course">Duration of Course</label>
                                <input type="text" name="duration_of_course" id="duration_of_course" class="form-control"
                                    placeholder="Duration of Course"
                                    value="{{ $university->duration_of_course ?? old('duration_of_course') }}">
                                @error('duration_of_course')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>




                            <div class="col-sm-4 mt-3">
                                <label for="eligibility"> Eligibility</label>
                                <input type="text" name="eligibility" id="eligibility" class="form-control"
                                    placeholder="Medium of Instruction"
                                    value="{{ $university->eligibility ?? old('eligibility') }}">
                                @error('eligibility')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>



                            <div class="col-sm-4 mt-3">
                                <label for="intake"> Intake</label>
                                <input type="text" name="intake" id="intake" class="form-control"
                                    placeholder="Intake" value="{{ $university->intake ?? old('intake') }}">
                                @error('intake')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-sm-4 mt-3">
                                <label for="location"> Location</label>
                                <input type="text" name="location" id="location" class="form-control"
                                    placeholder="Location" value="{{ $university->location ?? old('location') }}">
                                @error('location')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-sm-4 mt-3">
                                <label for="email"> Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Email Id" value="{{ $university->email ?? old('email') }}">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-sm-4 mt-3">
                                <label for="contact_no">Contact No</label>
                                <input type="text" name="contact_no" id="contact_no" class="form-control"
                                    placeholder="Contact No" value="{{ $university->contact_no ?? old('contact_no') }}">
                                @error('contact_no')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-sm-4 mt-3">
                                <label for="name">Image</label>
                                <input type="file" name="image" class="form-control"
                                    accept="image/png, image/jpg, image/jpeg">
                            </div>



                            <div class="col-sm-4 mt-3">
                                <label for="slug">Slug</label>
                                <input type="text" name="slug" id="slug" class="form-control"
                                    placeholder="Slug" value="{{ $university->slug ?? old('slug') }}">
                                @error('slug')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12 mt-4">
                                <div class="card">
                                    <h3 class="text-center pt-2">Study Areas</h3>
                                    <div class="card-body">
                                        <label for="multiple-select-field" class="form-label">Study Area</label>
                                        <select class=" form-control" name="study_areas[]" id="multiple-select-field"
                                            data-placeholder="Choose anything" multiple style="width:100%;"
                                            onchange="getallsubcourses(event)" required>
                                            @if (!empty($courses))
                                                @foreach ($courses as $val)
                                                    <option value="{{ $val->id }}">{{ $val->course_name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>


                                    <div class="card-body">
                                        <label for="multiple-select-clear-field" class="form-label">Available
                                            Courses</label>
                                        <select class=" form-control subcourse-dropdown" name="available_courses[]"
                                            id="multiple-select-clear-field" data-placeholder="Choose anything" multiple
                                            style="width:100%;" required>

                                        </select>
                                    </div>




                                </div>
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

    <script>
        function getallsubcourses(event) {
            var courseid = $(event.target).val();
            if (courseid !== '') {
                $.ajax({
                    url: '{{ route('get.subcourses') }}',
                    type: 'post',
                    data: {
                        '_token': '{{ csrf_token() }}',
                        'courseid': courseid
                    },
                    success: function(result) {
                        var subcourses = result;
                        var subcourseDropdown = $(
                            '.subcourse-dropdown');
                        subcourseDropdown.empty();
                        subcourses.forEach(function(subcourse) {
                            subcourseDropdown.append(new Option(subcourse.subcourse_name, subcourse
                                .id));
                        });
                    }
                })
            }
        }
    </script>
@endsection
