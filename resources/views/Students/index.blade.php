@extends('layouts.app')
@section('content')
    <div class="container">
        <title>Students</title>
    <p class='create'>[<a href='/students/create'>create</a>]</p>   
    <div class='students'>
        @foreach($students as $student)
            <div class='student mb-4'>
                <h3 class='name'>{{ $student->name }}</h3>
                
                学籍番号:
                <h5 class="id">{{$student->id}}</h5>
                
                学年:
                <h5 class='grade'>{{ $student->grade }}</h5>
                
                年齢:
                <h5 class='age'>{{ $student->age }}</h5>
                
                好きな教科:
                <h5 class='subject'>
                    @foreach($student->subjects as $subject)
                        {{$subject->subject}}
                    @endforeach
                </h5>
            </div>
        @endforeach
    </div>
    </div>
@endsection('content')