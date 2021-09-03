<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach ($courses as $course)
        <div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">
            <a href="{{ route('course') }}">
                <img class="rouded-md mb-2" src="{{ Storage::url($course->image) }}" alt="Prueba de imagen">
                <h2 class="text-lg font-bold text-gray-600 truncate uppercase">{{ $course->name }}</h2>
                <h3 class="text-md text-gray-500">{{ $course->excerpt }}</h3>

                <img class="rounded-full mt-4 mx-auto h-16 w-16" src="{{ $course->user->avatar }}"
                    alt="Avatar del profesor">
            </a>
        </div>
    @endforeach
</div>
