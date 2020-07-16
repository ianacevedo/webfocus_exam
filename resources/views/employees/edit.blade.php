@extends('layouts.app')

@section('content')
<div class="container">
            <h3>Edit</h3>
            <form method="post" action="{{ url('employee/save') }}">
            @csrf
            @method('post')
            <input type="hidden" name="id" id="id" value="{{ $employee['id'] }}">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name" value="{{ $employee['firstName'] }}" required />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name" value="{{ $employee['lastName'] }}" required />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                    <label>Middle Name</label>
                        <input type="text" class="form-control" name="middleName" id="middleName" placeholder="Middle Name" value="{{ $employee['middleName'] }}" required />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nick Name</label>
                        <input type="text" class="form-control" name="nickName" id="nickName" placeholder="Nick Name" value="{{ $employee['nickName'] }}" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Department</label>
                        <input type="text" class="form-control" name="dept" id="dept" placeholder="Department" value="{{ $employee['dept'] }}" required />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Position</label>
                        <input type="text" class="form-control" name="position" id="position" placeholder="Position" value="{{ $employee['position'] }}" required />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Birth Date</label>
                        <input type="date" class="form-control" name="birthDate" id="birthDate" placeholder="Birth Date YYYY-MM-DD" value="{{ $employee['birthDate'] }}" required/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Hired Date</label>
                        <input type="date" class="form-control" name="hiredDate" id="hiredDate" placeholder="Hired Date YYYY-MM-DD" value="{{ date('Y-m-d', strtotime($employee['hiredDate'])) }}" required/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>E-Mail</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="E-Mail Address" value="{{ $employee['email'] }}" required/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status" id="status" />
                            <option value="active">Active</option>
                            <option value="resigned">Resigned</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ url('employee') }}" class="btn btn-danger"> << Back</a>
                    <button type="Submit" class="btn btn-primary">Save >></button>
                </div>
            </div>
        </form>
</div>

@endsection
