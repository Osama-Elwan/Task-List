<h1>

    {{-- Hello Im a blade template --}}
    The list of tasks
</h1>
{{-- @isset($name)
<div>

    The name is : {{ $name }}
</div>
@endisset --}}


{{-- <div> --}}
    {{-- @dd($tasks) --}}
    {{-- @if (count($tasks)) --}}
        {{-- <div>there are tasks</div> --}}
        {{-- @foreach ($tasks as $task) --}}
            {{-- <div>{{ $task->title }}</div> --}}
        {{-- @endforeach --}}
        {{-- @else --}}
        {{-- <div>there are no tasks</div> --}}
    {{-- @endif --}}
{{-- </div> --}}

<div>


        {{-- <div>there are tasks</div> --}}
        @forelse ( $tasks as $task )
        <div>

            <a href="{{ route('tasks.show',['id'=>$task->id]) }}">{{ $task->title }}</a>
        </div>
        {{-- <div>{{ $task->title }}</div> --}}
        @empty

        <div>there are no tasks</div>
        @endforelse ($tasks as $task)



</div>