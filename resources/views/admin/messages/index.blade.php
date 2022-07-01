@extends('layouts.admin')

@section('content')

<h1>MEssages</h1>



<table class="table">
    <thead>
        <tr>
            <th>Subject</th>
            <th>Email</th>
            <th>FullName</th>
            <th>Message</th>
        </tr>
    </thead>
    <tbody>

        @forelse ($messages as $message )
        <tr>
            <td scope="row">{{$message->subject}}</td>
            <td>{{$message->email}}</td>
            <td>{{$message->full_name}}</td>
            <td>{{$message->text}}</td>

            <td>
                <a href="{{route('admin.messages.show', $message->id)}}" class="btn btn-primary"> View Message</a>



            </td>
        </tr>

        @empty

        <tr>
            <td scope="row">Nothing to show</td>

        </tr>


        @endforelse

    </tbody>
</table>



@endsection
