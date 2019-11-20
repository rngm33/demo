@extends('layouts.admin')
@section('content')

<div class="page-body">
    <div class="row">

<div class="table-responsive" id="list-table">
             @include('layouts.theme-one.snippets.message')
                <table class="table table-bordered">
                 <thead>
                     <tr class="table-inverse">
                        <th>SN</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>DOB</th>
                        <th>Phone </th>
                        <th class="none">Gender</th>
                        <th class="none">Email</th>
                        <th>Action</th>
                    </tr>
                 </thead>
                 <tbody>
                    @if(count($students)>0)
                    @foreach($students as $key=>$student)
                     <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->address}}</td>
                        <td>{{$student->dob}}</td>
                        <td>{{$student->phone}}</td>

                        <td>{{$student->gender}}</td>
                        <td>{{$student->email}}</td>
                        <td>
                          <div class="btn-group " role="group" >
                            <a href="{{route('student.view',['id'=>$student->id])}}" class="btn btn-secondary btn-round btn-sm btn-mini waves-effect waves-light mr-1"><i class="fa fa-eye"></i> <span class="btn-label hidden-sm">View</span></a>
                            <a href="{{route('student.edit', ['id'=>$student->id])}}" class="btn btn-primary btn-sm btn-mini waves-effect waves-light mr-1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span class="btn-label hidden-sm">Edit</span></a>
                            <a href="{{route('student.delete', ['id'=>$student->id])}}" class="btn btn-danger btn-sm btn-round btn-mini waves-effect waves-light"><i class="fa fa-trash" aria-hidden="true"></i> <span class="btn-label hidden-sm">Delete</span></a>
                          </div>

                         </td>
                     </tr>
                     @endforeach
                     @else
                     <tr>
                         <td colspan="9">No students Found !!</td>
                     </tr>                            
                     @endif 

                    </tbody>
                </table>
                 <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                 <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />
                 <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
                 <input type="hidden" name="hidden_showdata" id="hidden_showdata" value="10" />
            </div>

            </div>
            </div>
            @endsection