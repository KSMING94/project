@extends('layouts.app')

@section('title')
        글 등록 폼
@endsection     

@section('content')
    <?php
        require_once('tools.php');

        $page = requestValue('page');
    ?>
    <form action="write_start" method="post">
        <?= csrf_field(); ?>
        <div class="form-group">
            <label for="title">제목: </label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        
        <div class="form-group">
            <input type="hidden" id="writer" name="writer" class="form-control" value="{{ \Session::get('name') }}" required>
        </div>
        
        <div class="form-group">
            <label for="content">내용: </label>
            <textarea rows="5" id="content"
            name="content" class="form-control" required></textarea>
            <button type="submit" class="btn btn-primary">글등록</button>  
        </div>      
    </form>     
@endsection
