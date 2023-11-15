@extends('./master')
@section('content')
<form action="{{route('todos.store')}}" method="POST">
    @csrf
   
            <div class="card shadow">
                <div class="card-header">
                    <h3 class="card-title">Create Todo</h3>
                </div>
                <div class="card-body">
                    <div class="form-group mb-2">
                        <label for="title">Title <span class="text-danger">*</span></label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Todo title">
                    @error('title')
                    <p class="text-danger">{{$message}}</p>

                    @enderror
                    </div>

                    <div class="form-group mb-2">
                        <label for="description">Description <span class="text-danger">*</span></label>
                    <textarea  name="description" class="form-control" id="title" placeholder="Todo description"></textarea>
                    @error('description')
                    <p class="text-danger">{{$message}}</p>

                    @enderror
                    </div>
                    <div class="card-footer">
                        <div class="form-group mb-2">
                            <button type="submit" class="btn btn-success">Create</button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</form>
@endSection
