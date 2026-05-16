@extends('backend.layouts.admin')
@section('content')
    <div class="row" style="margin-bottom: 4%;">
        <div class="col-sm-3 d-none" id="addbuttondiv">
            <a class="btn btn-block  btn-primary btn-rounded" href="{{ route('universities.create') }}">Add New University</a>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="col-sm-12"></div>
        <div class="row card border-bottom white-bg dashboard-header" style="margin-bottom: 10%;">
            <div class="wrapper wrapper-content switch-header">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="pull-right tableTools-container"></div>
                        <div class="tblback"></div>
                        <table id="dynamic-table" class="table table-striped table-bordered" style="width:100%;">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">Country</th>
                                    <th style="text-align: center;">University </th>
                                    <th style="text-align: center;">Total Fees </th>
                                    <th style="text-align: center;">Duration</th>
                                    <th style="text-align: center;">Stydy Areas</th>
                                    <th style="text-align: center;">Available Course</th>
                                    <th style="text-align: center;">Email</th>
                                    <th style="text-align: center;">Status</th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($universities))
                                    @foreach ($universities as $university)
                                        <tr>
                                            <td style="text-align: center;">{{ $university->country->name }}</td>
                                            <td style="text-align: center;">
                                                <img src="{{ asset('universities/' . $university->logo) }}"
                                                    alt="{{ $university->name }}" style="max-width: 100px;">
                                                <br>
                                                {{ $university->name }}
                                            </td>
                                            <td style="text-align: center;">
                                                ${{ $university->total_course_fees }}</td>
                                            <td style="text-align: center;">{{ $university->duration_of_course }} months
                                            </td>
                                            <td style="text-align: center;">
                                                @foreach ($university->studyAreas as $studyArea)
                                                    {{ $studyArea->course->course_name }}<br>
                                                @endforeach
                                            </td>
                                            <td style="text-align: center;">
                                                @foreach ($university->availableCourses as $availableCourse)
                                                    {{ $availableCourse->subcourse->subcourse_name }} ,<br>
                                                @endforeach
                                            </td>
                                            <td style="text-align: center;">{{ $university->email }}</td>
                                            <td style="text-align: center;">
                                                {{ $university->status == 1 ? 'Active' : 'Inactive' }}</td>
                                            <td style="text-align: center;">
                                                {{-- <a href="{{ route('universities.edit', $university->id) }}" class="btn btn-sm btn-primary">Edit</a> --}}
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModel{{ $university->id }}">
                                                    Delete
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="deleteModel{{ $university->id }}"
                                                    tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Delete Record
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are You Sure You Want to Delete This Record ?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Cancel</button>
                                                                <form
                                                                    action="{{ route('universities.delete', ['university' => $university->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-danger">Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>

                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
            <br> <br> <br> <br>
        </div>
    </div>
@endsection
