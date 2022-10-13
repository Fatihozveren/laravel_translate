@extends('front.layouts.app')
@section('title') Fatih Translate @endsection
@section('content')
    <style>
        .s003{
            height: max-content;
        }
        .s003 form{
            margin-top: 5vh;
        }
        .alerts {
            margin-left: -275px;
            position: absolute;
            width: max-content;
            background: none;
            margin-top: 28vh;
        }
        .alerts p{
            width: max-content;
            color: white !important;
            padding: 3px;
            top: 34px;
            background-color: #565656;
            border-radius: 4px;
        }
        .alerts i{
            color: #565656;
            height: 19px;
            margin-top: 15px;
        }
        @media only screen and (max-width: 767px) {
            .alerts{
                margin-left: 0;
                position: absolute;
                width: max-content;
                background: none;
                margin-top: 39vh;
                z-index: 5;
                left: 115px;
            }

        }
    </style>
    <div class="s003Div">
        <div class="s003">
            <div style="display: flex; align-items: center; justify-content: center">
                    <h2 style="font-weight: 300">Fatih Translate</h2>
            </div>
            <div class="alerts" >
                @if($errors->any())
                    @foreach($errors->all() as  $error)
                        <i class="fas fa-caret-up fa-2x"></i>
                        <p style="position: absolute; padding: 3px; color: red;">- {{$error}}</p>
                    @endforeach
                @endif
            </div>
            <form method="post" action="{{route('translate.post')}}">
                @csrf
                <div class="inner-form">
                    <div class="input-field second-wrap">
                            <input minlength="2" required id="search" name="arama" type="text" placeholder="Çevirisini yapmak istediğiniz kelimeyi giriniz." required/>
                    </div>
                    <div class="input-field third-wrap">
                        <button class="btn-search" type="submit">
                            <svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
            <div class="inner-form">
                @if(isset($result))
                <div class="input-field second-wrap" style="text-align: center">
                    <br>
                    <hr style="width: 100%">
                    <span>{{$result}}</span>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
