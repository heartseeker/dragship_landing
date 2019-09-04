@extends('layout')

@section('content')
    <div class="hero">
        <h2 class="subtitle">Expand Your Business</h2>
        <p class="motto">Make your income increase whether you are a <span class="motto__distributor">Distributor</span> or a <span class="motto__reseller">Reseller</span></p>
        <a href="/coming-soon" class="btn btn-red btn-get-started">Get started for free</a>
    </div>

    <section class="main" id="reseller">
        <div class="how-it-works">
            <h1 class="how-it-works__title">How it works as a reseller</h1>

            <div class="how-it-works__content">

                <div class="how-it-works__item">
                    <svg class="how-it-works__icon">
                        <use xlink:href="/images/icomoon/sprite.svg#icon-pencil"></use>
                    </svg>
                    <p>Dragship helps you generate extra income by finding you a distributor and resell their products</p>
                </div>

                <div class="how-it-works__item">
                    <svg class="how-it-works__icon">
                        <use xlink:href="/images/icomoon/sprite.svg#icon-user-tie"></use>
                    </svg>
                    <p>Find a distributor to your liking and resell their products without a <b>CAPITAL</b></p>
                </div>
                <div class="how-it-works__item">
                    <svg class="how-it-works__icon">
                        <use xlink:href="/images/icomoon/sprite.svg#icon-search"></use>
                    </svg>
                    <p>Search products that you want to sell and earn commission base on how many products you sold</p>
                </div>

                <div class="how-it-works__item">
                    <svg class="how-it-works__icon">
                        <use xlink:href="/images/icomoon/sprite.svg#icon-files-empty"></use>
                    </svg>
                    <p>As a reseller, sell a wide variety of products coming from different distributors to gain more commission</p>
                </div>

            </div>
        </div>
    </section>

    
    <section class="main main-odd" id="distributor">
            <div class="how-it-works">
                <h1 class="how-it-works__title">How it works as a distributor</h1>
    
                <div class="how-it-works__content">
    
                    <div class="how-it-works__item">
                        <svg class="how-it-works__icon">
                            <use xlink:href="/images/icomoon/sprite.svg#icon-coin-dollar"></use>
                        </svg>
                        <p>Dragship helps you increase your sales by finding you trusted resellers</p>
                    </div>
    
                    <div class="how-it-works__item">
                        <svg class="how-it-works__icon">
                            <use xlink:href="/images/icomoon/sprite.svg#icon-search"></use>
                        </svg>
                        <p>Search a variety of resellers from our list or let resellers find you</p>
                    </div>
    
                    <div class="how-it-works__item">
                       {{-- <img class="how-it-works__icon" src="/images/bar-chart.svg" alt="Dashboard"> --}}
                       <svg class="how-it-works__icon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
    <g>
        <g>
            <path d="M488.399,492h-21.933V173.536c0-14.823-12.06-26.882-26.882-26.882H390.56c-14.823,0-26.882,12.06-26.882,26.882V492
                h-55.692V317.825c0-14.823-12.059-26.882-26.882-26.882H232.08c-14.823,0-26.882,12.06-26.882,26.882V492h-55.692v-90.204
                c0-14.823-12.06-26.882-26.882-26.882H73.599c-14.823,0-26.882,12.06-26.882,26.882V492H23.601c-5.523,0-10,4.477-10,10
                s4.477,10,10,10h464.798c5.523,0,10-4.477,10-10S493.922,492,488.399,492z M129.504,492H66.716v-90.204
                c0-3.795,3.087-6.882,6.882-6.882h49.024c3.795,0,6.882,3.087,6.882,6.882V492z M287.985,492h-62.788V317.825
                c0-3.795,3.087-6.882,6.882-6.882h49.024c3.794,0,6.882,3.087,6.882,6.882V492z M446.466,492h-62.788V173.536
                c0-3.795,3.087-6.882,6.882-6.882h49.024c3.795,0,6.882,3.087,6.882,6.882V492z"/>
        </g>
    </g>
    <g>
        <g>
            <path d="M466.442,10.516c0.14-2.729-0.82-5.504-2.904-7.588c-2.084-2.084-4.859-3.045-7.588-2.904
                C455.789,0.017,455.63,0,455.466,0h-60.5c-5.523,0-10,4.477-10,10s4.477,10,10,10h37.357l-98.857,98.858l-37.28-37.28
                c-1.875-1.875-4.419-2.929-7.071-2.929c-2.652,0-5.196,1.054-7.071,2.929l-179.769,179.77c-3.905,3.905-3.905,10.237,0,14.143
                c1.953,1.951,4.512,2.927,7.071,2.927s5.119-0.976,7.071-2.929L289.115,102.79l37.28,37.28c3.905,3.905,10.237,3.905,14.143,0
                L446.466,34.143v33.81c0,5.523,4.477,10,10,10s10-4.477,10-10V11C466.466,10.837,466.449,10.678,466.442,10.516z"/>
        </g>
    </g>
    <g>
        <g>
            <circle cx="75.64" cy="303.31" r="10"/>
        </g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    </svg>
                        <p>Dragship dashboards help you analyze who's the best reseller and what product sells the most</p>
                    </div>
    
                    <div class="how-it-works__item">
                        <svg class="how-it-works__icon">
                            <use xlink:href="/images/icomoon/sprite.svg#icon-rocket"></use>
                        </svg>
                        <p>Dragship helps skyrocket your business and make a much better profit than ever before!</p>
                    </div>
    
                </div>
            </div>
        </section>


    <section class="main main-last">
        <h1>Let's increase your profit now like never before!</h1>
        <a href="/coming-soon" class="btn btn-red btn-get-started">Get started for free &nbsp; <span class="arrow">&rarr;</span></a>
    </section>
@endsection