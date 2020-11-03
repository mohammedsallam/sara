@if(count($errors))
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </div>
@endif

@if (session('message'))
    <div class="alert alert-success message_alert">{{session('message')}}</div>
@endif

<div class="alert alert-danger ajaxErrorResponse" style="display: none"></div>
<div class="alert alert-success ajaxResponse" style="display: none"></div>
