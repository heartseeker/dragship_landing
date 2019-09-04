@extends('layout')

@section('content')
    <section class="coming-soon">
        <div class="coming-soon__main">
            <h1 class="coming-soon__title">Hello! You found Dragship before it's ready.</h1>
            <p class="coming-soon__content">
                We're still working on the first version of Dragship. If you'd like me to send you a reminder when it's ready, just put if you're a distributor or a reseller and your email below.
            </p>
            <div class="box">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="form" action="/subscribe" method="POST">
                    {{ csrf_field() }}
                    <select name="user_type">
                        <option value="">Are you a?</option>
                        <option value="1">Reseller</option>
                        <option value="2">Distributor</option>
                    </select>
                    <input type="email" id="email" name="email" placeholder="Your Email Address">
                    <input type="submit" value="Remind Me">
                </form>
            </div>
            <p class="coming-soon__last-content">
                Also happy to answer any questions you have! just drop as email in <a href="mailto:alexinformationtech@gmail.com?subject=Inquiry for Dragship">alexinformationtech@gmail.com</a>
            </p>
        </div>
    </section>

@endsection