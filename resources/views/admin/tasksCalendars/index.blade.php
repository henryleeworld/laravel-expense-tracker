@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.tasksCalendar.title') }}
    </div>

    <div class="card-body">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css" />
        <div id="calendar"></div>

    </div>
</div>



@endsection

@section('scripts')
@parent
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/locale/zh-tw.js" integrity="sha512-EBYBWdQKCNrcSe7sJs7tJaJU2VJvCBr97uPybNjLVoypNDOyoBg62yrB/J3eBAHmfSydIhKrY0LAC/Fja+N0OA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                locale: 'zh-tw',
                // put your options and callbacks here
                events : [
@foreach($events as $event)
@if($event->due_date)
                            {
                                title : '{{ $event->name }}',
                                start : '{{ \Carbon\Carbon::createFromFormat(config('panel.date_format'),$event->due_date)->format('Y-m-d') }}',
                                url : '{{ url('admin/tasks').'/'.$event->id.'/edit' }}'
                            },
@endif
@endforeach
                ]
            })
        });
</script>

@stop