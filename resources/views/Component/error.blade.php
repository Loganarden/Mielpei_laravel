@if ($message = Session::get('error'))
<div class="alert alert-danger d-flex justify-content-center ">
    <p>{{ $message }}</p>
</div>
@endif