@extends('layouts.base')
@section('title','Contacts')

@section('content')
<table class="table table-bordered">
<thead>
    <tr>
        <th>#</th>
        <th>Nume</th>
        <th>Telefon</th>
        <th>Email</th>
        <th>Adresa</th>
        <th>Options</th>
    </tr>
</thead>
<tbody>
    @forelse($contacts as $contact)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$contact->nume}}</td>
        <td>{{$contact->telefon}}</td>
        <td>{{$contact->email}}</td>
        <td>{{$contact->adresa}}</td>
        <td>
            <a href="{{route('contacts.edit',['contact'=>$contact->id])}}"class="btn btn-sm btn-outline-warning">Edit</a>
            <button class="btn btn-sm btn-outline-danger"data-id="{{$contact->id}}">Delete</button>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="6">No contacts</td>
    </tr>
    @endforelse
</tbody>
</table>
<div>{{$contacts->links()}}
@endsection