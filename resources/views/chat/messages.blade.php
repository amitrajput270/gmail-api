@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Chat with : <b
                        style="color:dimgrey;">{{ \App\User::whereId($senderId)->first()->name}}</b></div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($messages as $message)
                        <li class="list-group-item">
                            <!--  if sender is the current user print align left -->
                            @if ($message->sender_id == \Auth::id())
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    {{ $message->message }}
                                    <br>
                                    <small class="msg_time_send">{{ $message->created_at->diffForHumans() }}</small>
                                </div>
                                <div class="img_cont_msg">
                                    <img style="width: 40px;height: 40px;"
                                        src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                                        class="rounded-circle user_img_msg">
                                </div>
                            </div>
                            @else
                            <!--  if sender is not the current user print align right -->
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img style="width: 40px;height: 40px;"
                                        src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                                        class="rounded-circle user_img_msg">
                                </div>
                                <div class="msg_cotainer">
                                    {{ $message->message }}
                                    <br>
                                    <small class="msg_time">{{ $message->created_at->diffForHumans() }}</small>
                                </div>
                            </div>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <p></p>
            <form action="{{ route('send.message') }}" method="post">
                @csrf
                <input type="hidden" name="receiver_id" value="{{$senderId}}">
                <input type="text" name="message" class="form-control" placeholder="Type your message here..." />
                <br />
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>
</div>
@endsection