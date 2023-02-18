@extends('layout')
@section('title', 'View Data')
@section('content')
<style>
      table, th, td {
  border: 1px solid;
  border-collapse: collapse;
  padding: 10px;
 
}
    </style>
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

@if(count($employees) > 0)


    <div>
        
   

    <table>
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Company</th>
            <th>Chapter Name</th>
            <th>View More</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($employees as $employee)
    <tr>
   <td>{{$employee['firstName']}}</td>
    
    
    <td>{{$employee['lastName']}}</td>
    <td>{{$employee['companyName']}}</td>
    <td>{{$employee['chapterName']}}</td>
    

    <td><a href="{{route('employees.show', ['employee' => $employee['id']])}}"><strong>View More...</strong></a></td>
    </tr>
    @endforeach
    </tbody>
</table>
        
    </div>

@else
<h2> There are no employees to display </h2>
@endif

@endsection