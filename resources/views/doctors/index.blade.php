@extends('layouts.master')

@section('title')
    Doctors | suraj hospital
@endsection

@section('content')
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
           <div class="card add-row">
             <div class="card-header">
                Doctors
                <a href=" {{route('doctors.create')}} " class="float-right btn btn-primary">create doctors</a>
             </div>
             <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Date of Birth</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($doctors as $doctor)
                            <tr>
                                <td>{{ $doctor->id }}</td>
                                <td>{{ $doctor->full_name }}</td>
                                <td>{{ $doctor->date_of_birth }}</td>
                                <td>{{ $doctor->gender }}</td>
                                <td>{{ $doctor->email }}</td>
                                <td>{{ $doctor->phone }}</td>
                                <td>{{ $doctor->address }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('doctors.destroy', $doctor->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-info">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                {!! $doctors->links() !!}
            </div>
            </div>
        </div>
    </div>
</div>
@endsection


