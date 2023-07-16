@extends('layouts.app')
@section('content')
    <div id="chatbot">
        <div id="chat-log"></div>
        <form id="chat-form">
            <input id="input-field" type="text" name="message" placeholder="Enter your symptoms here...">
            <button type="submit">Send</button>
        </form>
    </div>
    <script src="{{ asset('js/chat.js') }}"></script>
@endsection
