<!-- resources/views/notifications/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Notification</h1>
    <form action="{{ route('notifications.send') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Enter Notification Title" required>
        </div>
        <div class="form-group">
            <label for="body">Message</label>
            <textarea name="body" class="form-control" placeholder="Enter Notification Message" required></textarea>
        </div>
        <div class="form-group">
            <label for="image_url">Image URL (optional)</label>
            <input type="url" name="image_url" class="form-control" placeholder="Enter Image URL">
        </div>
        <button type="submit" class="btn btn-success mt-3">Send Notification</button>
    </form>
</div>
@endsection
