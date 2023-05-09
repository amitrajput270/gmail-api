
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Chat with : <b style="color:dimgrey;">{{ \App\User::whereId($senderId)->first()->name}}</b></div>

                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($messages as $message)
                                <li class="list-group-item">
                                    <strong>{{ $message->sender->name }}:</strong> {{ $message->message }}
                                    <br/>
                                    <!-- date and time -->
                                    <span class="pull-right">{{ $message->created_at->diffForHumans() }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <p></p>
                <form action="{{ route('send.message') }}" method="post">
                  @csrf
                  <input type="hidden" name="receiver_id" value="{{$senderId}}"  >
                  <input type="text" name="message" class="form-control" placeholder="Type your message here..." />
                  <br/>
                  <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
@endsection
