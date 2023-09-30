<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach($courses as $course)
        <div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">
            <a href="{{ route('course', $course->slug) }}">
                <img src="{{$course->image}}" class="rounded-md mb-2">
                <h2>{{$course->name}}</h2>
                <h3>{{$course->excerpt}}</h3>
                <img src="{{$course->user->avatar}}" alt="">
            </a>
        </div>
    @endforeach
</div>
