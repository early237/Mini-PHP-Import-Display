@extends('layout')
@section('title', 'Details')
@section('content')

<style>
      table, th, td {
  border: 1px solid;
  border-collapse: collapse;
  padding: 10px;
 
}
    </style>
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

<table>
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Profession</th>
            <th>Chapter Name</th>
            <th>Website</th>
            <th>Address</th>
            <th>Postcode</th>
            <th>Phone Number</th>
            <th>Status</th>
            <th>Join Date</th>
            <th>Renewal Date</th>
            <th>Sponsor</th>


        </tr>
    </thead>
    <tbody>
    
    <tr>

    <td>{{$employee['firstName']}}</td>
    <td>{{$employee['lastName']}}</td>
    <td>{{$employee['email']}}</td>
    <td>{{$employee['profession']}}</td>
    <td>{{$employee['chapterName']}}</td>
    <td>{{$employee['website']}}</td>
    <td>{{$employee['address']}}</td>
    <td>{{$employee['postcode']}}</td>
    <td>{{$employee['phoneNumber']}}</td>
    <td>{{$employee['status']}}</td>
    <td>{{$employee['joinDate']}}</td>
    <td>{{$employee['renewalDate']}}</td>
    <td>{{$employee['sponsor']}}</td>

    </tr>

   
    </tbody>
</table>
<button class=" border-1" type="button" onclick="window.location='{{ URL::route('employees.index'); }}'">Go back</button>
</div>

@endsection