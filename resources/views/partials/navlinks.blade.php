@if(Request::route()->getName()!='home')
<a class="btn btn-primary" href="{{url('/')}}"><I class="glyphicon glyphicon-home"></i>&nbsp;&nbsp;Home</a>
@endif
@if(Request::route()->getName()!='contact')
    <a class="btn btn-info" href="{{url('/contact')}}"><I class="glyphicon glyphicon-tag"></i>&nbsp;&nbsp;Contact</a>
@endif
@if(Request::route()->getName()!='about')
    <a class="btn btn-success" href="{{url('/about')}}"><I class="glyphicon glyphicon-tags"></i>&nbsp;&nbsp;About</a>
@endif