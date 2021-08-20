@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/students" method="POST">
            @csrf
            <div>
                <h2>学籍番号</h2>
                <input type="text" name="student[id]" placeholder="学籍番号" value="{{old('student.id')}}" />
            </div>
            
            <div class="mt-3">
                <h2>名前</h2>
                <input type="text" name="student[name]" placeholder="名前" value="{{old('student.name')}}" />
            </div>
            
            <div class="mt-3">
                <h2>学年</h2>
                <input type="text" name="student[grade]" placeholder="学年" value="{{old('student.grade')}}" />
            </div>
            
            <div class="mt-3">
                <h2>年齢</h2>
                <input type="text" name="student[age]" placeholder="年齢" value="{{old('student.age')}}" />
            </div>
            
            <div class="mt-3">
                <h2>好きな教科</h2>
                @foreach($subjects as $subject)
                    <label>
                        <input type="checkbox" value="{{ $subject->id }}" name="subject_array[]" class="mb-2">{{$subject->subject}}</input>
                    </label>
                @endforeach
                
            </div>
            <input type="submit" value="保存"/>
        </form>
        
        <div class="back">[<a href="/students">back</a>]</div>
    </div>
@endsection('content')