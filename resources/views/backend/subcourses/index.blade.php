@extends('backend.layouts.admin')
@section('content')
    <div class="row" style="margin-bottom: 4%;">
        <div class="col-sm-3 d-none" id="addbuttondiv">
            <a class="btn btn-block  btn-primary btn-rounded" href="{{ route('subcourses.create') }}">Add New Sub Course</a>
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
                                    <th style="text-align: center;">Course Name</th>
                                    <th style="text-align: center;">Sub-Course Name</th>
                                    <th style="text-align: center;">Image </th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($subcourses))
                                    @foreach ($subcourses as $val)
                                        <tr>
                                            <td>{{ $val->course_name }}</td>
                                            <td>{{ $val->subcourse_name }}</td>
                                            <td></td>
                                            <td class="d-flex justify-content-around">

                                                <a href="{{ route('subcourses.update', ['subcourse' => $val->id]) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModel{{ $val->id }}">
                                                    Delete
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="deleteModel{{ $val->id }}" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                    action="{{ route('subcourses.delete', ['subcourse' => $val->id]) }}"
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
                        </table>


                    </div>
                </div>
            </div>
            <br> <br> <br> <br>
        </div>
    </div>
@endsection
