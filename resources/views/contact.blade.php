<!DOCTYPE html>
@extends('layouts.page')
@section('title')
{{$title}}
@endsection

@section('content')
    <div class="container">                <br/><br/><br/>
        <div class="panel panel-info">
            <div class="panel-heading"><b><h2><center>ติดต่อเรา</center></h2></b></div>
                <div class="panel-body">

                    <div class="row">
                        <div class="col-sm-4"><b>ที่อยู่:</b></div>
                        <div class="col-sm-8">เลขที่ 2 ถนนรอบกำแพงเมืองทิศตะวันตก ต.ในเวียง อ.เมืองน่าน จ.น่าน 55000</div>
                    </div><hr/>
                    <div class="row">
                        <div class="col-sm-4"><b>เบอร์โทร:</b></div>
                        <div class="col-sm-8">093-1154452,087-1895816</div>
                    </div><hr/>
                    <div class="row">
                        <div class="col-sm-4"><b>E-mail:</b></div>
                        <div class="col-sm-8">timemie000@gmail.com,mokutime@gmail.com</div>
                    </div>
                </div>
        </div>
    </div>
    <center>{{$content}}</center>
    @endsection