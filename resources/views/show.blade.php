<x-layout>
    <x-nav/>
    <div class="container marginCustom">
        <div class="row height-custom justify-content-center align-items-center text-center mt-5">
            <div class="col-12">
                {{-- <h1> {{ $article->title }}</h1> --}}
            </div>
        </div>
    </div>
    
    <div class="container marginCustom">
        <div class="row">
            <div class="col-sm-6">
                {{-- <div id="carousel" class="carouselCustom slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="https://picsum.photos/900">
                        </div>
                        <div class="item">
                            <img src="https://picsum.photos/900/201">
                        </div>
                        <div class="item">
                            <img src="https://picsum.photos/900/202">
                        </div>
                        <div class="item">
                            <img src="https://picsum.photos/900/203">
                        </div>
                        <div class="item">
                            <img src="https://picsum.photos/900/204">
                        </div>
                        <div class="item">
                            <img src="https://picsum.photos/900/205">
                        </div>
                        <div class="item">
                            <img src="https://picsum.photos/900/206">
                        </div>
                        <div class="item">
                            <img src="https://picsum.photos/900/207">
                        </div>
                    </div>
                </div> 
                <div class="clearfix">
                    <div id="thumbcarousel" class="carouselCustom slide" data-interval="false">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="https://picsum.photos/900"></div>
                                <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="https://picsum.photos/900/201"></div>
                                <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="https://picsum.photos/900/202"></div>
                                <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="https://picsum.photos/900/203"></div>
                            </div><!-- /item -->
                            <div class="item">
                                <div data-target="#carousel" data-slide-to="4" class="thumb"><img src="https://picsum.photos/900/204"></div>
                                <div data-target="#carousel" data-slide-to="5" class="thumb"><img src="https://picsum.photos/900/205"></div>
                                <div data-target="#carousel" data-slide-to="6" class="thumb"><img src="https://picsum.photos/900/206"></div>
                                <div data-target="#carousel" data-slide-to="7" class="thumb"><img src="https://picsum.photos/900/207"></div>
                            </div><!-- /item -->
                        </div><!-- /carousel-inner -->
                        <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div> 
                </div> --}}
                
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/900" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/901" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/902" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/903" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                
                
            </div> 
            
            
            
            <div class="col-sm-6 d-flex flex-column justify-content-center align-items-center">
                <h2>{{$article->title}}</h2>
                <h4>{{$article->category['name']}}</h4>
                <p>{{$article->description}}</p>
                <p>€ {{$article->price}}</p>
                
            </div> <!-- /col-sm-6 -->
        </div> <!-- /row -->
    </div> <!-- /container -->

    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="col-6 mt-5 text-start">
                    <a class="btn colorBtn " href="{{route('home')}}">Torna alla home</a>
                </div>
            </div>
        </div>
    </div>
    
</x-layout>