@if ($message = Session::get('success'))
    <div class="alert allert-sucsess d-flex justify-content-center ">
        <p>{{ $message }}</p>
    </div>
@endif