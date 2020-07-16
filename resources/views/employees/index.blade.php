@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    <table class="table">
    <tr>
        <th>Full Name</th>
        <th>Department</th>
        <th>Position</th>
        <th>Age</th>
        <th>Hired Date</th>
        <th>E-Mail</th>
        <th>Status</th>
        <th>
            <a href="" class="btn btn-warning" data-toggle="modal" data-target="#addForm" onclick="main.openAddForm()">Add +</a>
        </th>
    </tr>
    <tbody>
        @foreach($employees as $employee)
        <tr>
            <td>
                {{ $employee['lastName'] }}, {{ $employee['firstName'] }} {{ $employee['middleName'] }}
            </td>
            <td> {{ $employee['dept'] }}</td>
            <td>{{ $employee['position'] }}</td>
            <td>{{ $employee['age'] }}</td>
            <td>{{ $employee['hiredDate'] }}</td>
            <td>{{ $employee['email'] }}</td>
            <td>{{ ucwords($employee['status']) }}</td>
            <td>
                <a href="{{ url('employee/edit').'/'.$employee['id'] }}" class="btn btn-success">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    </div>

<!-- Modal -->
<div class="modal fade" id="addForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <form method="post" id="employeeForm" action="{{ url('/employee/save') }}">
 @csrf
 @method('post')
 <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Add Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="id" id="id">
        <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name" required />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name" required />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" name="middleName" id="middleName" placeholder="Middle Name" required />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nick Name</label>
                        <input type="text" class="form-control" name="nickName" id="nickName" placeholder="Nick Name"  />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Department</label>
                        <input type="text" class="form-control" name="dept" id="dept" placeholder="Department" required />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Position</label>
                        <input type="text" class="form-control" name="position" id="position" placeholder="Position" required />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Birth Date</label>
                        <input type="date" class="form-control" name="birthDate" id="birthDate" placeholder="Birth Date YYYY-MM-DD" required/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Hired Date</label>
                        <input type="date" class="form-control" name="hiredDate" id="hiredDate" placeholder="Hired Date YYYY-MM-DD" required/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>E-Mail</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="E-Mail Address" required/>
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
      </div>
      <div class="modal-footer">
        <button type="Submit" class="btn btn-primary">Save >></button>
      </div>

    </div>
  </div>
</div>
</form>
</div>
@endsection
