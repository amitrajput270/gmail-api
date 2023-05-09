@foreach($users as $user)
    <a href="{{ route('message', $user->id) }}">{{ $user->name }}</a>
@endforeach
