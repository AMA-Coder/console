<form action="{{route('save-basic.course',$course)}}" method="POST">
    {{csrf_field()}}{{method_field('POST')}}
    <div class="form-group">
        <label for="name">Title</label>
        {{ Form::text('name', $course->name, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        {{ Form::textarea('description', $course->description, ['class' => 'form-control','id'=>'description']) }}
    </div>
    <div class="form-group">
        <label for="language">Language</label>
        {{ Form::text('language', $languages, ['class' => 'form-control','id'=>'language']) }}
    </div>
    <div class="form-group">
        <label for="category">Category</label>
        {{ Form::text('category', null, ['class' => 'form-control','id'=>'category']) }}
    </div>

    <div class="form-group">
        <label for="scategory">Sub Category</label>
        {{ Form::text('scategory', null, ['class' => 'form-control','id'=>'scategory']) }}
    </div>
    <button type="submit" class="btn btn-success">Save</button>
</form>