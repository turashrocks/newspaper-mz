@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-end mb-2">
<a href="{{ route('posts.create') }}" class="btn btn-success float-right">Add Post</a>
</div>

<div class="card card-default">
    <div class="card-header">Post</div>
    <div class="card-body">
        @if($posts->count()>0)
            <table class="table" style="width:100%">
                <thead>
                    <th width="20%">Image</th>
                    <th width="30%">Title</th>
                    <th width="20%">Category</th>
                    <th width="5%"></th>
                    <th width="5%"></th>
                </thead>
                <tbody>
                    @foreach($posts as $post) 
                    <tr>
                    <td width="20%">
                        <img src="<?php echo asset("storage/$post->image")?>" width="50%" height="auto" alt="">    
                    </td>
                    <td width="30%">
                        {{$post->title}}
                    </td>
                    <td width="20%">
                        {{$post->category->name}}
                    </td>
                    @if(!$post->trashed())
                    <td width="5%">
                    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-info btn-sm" style="color: #fff;">
                            Edit
                    </a>
                    </td>
                    @else
                    <td width="5%">
                        <form action="{{ route('restore-posts', $post->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-success btn-sm">                            
                            Restore
                        </button>
                        </form>
                    </td>
                    @endif
                    <td width="5%">
                    <form action="{{ route('posts.destroy', $post->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            {{ $post->trashed() ? 'Delete' : 'Trash' }}
                        </button>
                    </form>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h3 class="text-center">No Posts Yet</h3>
        @endif
    </div>
</div>

@endsection

@section('scripts')
  
@endsection