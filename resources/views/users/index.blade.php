@extends('layouts.app')

@section('content')


<div class="card card-default">
    <div class="card-header">User</div>
    <div class="card-body">
        @if($users->count()>0)
            <table class="table" style="width:100%">
                <thead>
                    <th width="25%">Image</th>
                    <th width="25%">Name</th>
                    <th width="25%">Email</th>
                    <th width="25%"></th>
                </thead>
                <tbody>
                    @foreach($users as $user) 
                    <tr>
                        <td width="25%">
                            <img src="{{ Gravatar::src($user->email) }}" width="45%" height="auto" style="border-radius: 50%;" alt="image">
                        </td>
                        <td width="25%">
                            {{$user->name}}
                        </td>
                        <td width="25%">
                            {{$user->email}}
                        </td>
                        <td width="25%">
                            @if(!$user->isAdmin())
                                <form action="{{ route('users.make-admin', $user->id)}}" method="POST">
                                @csrf

                                <button type="submit" class="btn btn-success btn-sm">Make Admin</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h3 class="text-center">No Users Yet</h3>
        @endif
    </div>
</div>

@endsection

@section('scripts')
  
@endsection