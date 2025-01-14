<x-layout>
    <x-nav />
    <div class="container-fluid marginCustom text-center justify-content-center">
        <div class="row">
            <div class=" col-12">
                <div class="rounded">
                    <h1>{{__('ui.Workwithus')}}</h1>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container mt-5">
        
        <div class="row justify-content-center shadow p-5 rounded mb-5">
            <div class="col-10 col-md-6 mt-5">
                <form class="d-flex flex-column gap-3" action="{{ route('submit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="name">{{__("ui.Name")}}</label>
                        <input class="form-control" type="text" value="{{Auth::user()->name}}" disabled>
                        <input class="form-control d-none" type="text" name="name" value="{{Auth::user()->name}}">
                    </div>
                    <div>
                        <label for="email">E-mail</label>
                        <input class="form-control" type="email" value="{{Auth::user()->email}}" disabled>
                        <input class="form-control d-none" type="email" name="email" value="{{Auth::user()->email}}">
                    </div>
                    <div>
                        <label for="phone"> {{__('ui.Tlf')}} </label>
                        <input class="form-control" type="text" name="phone" required>
                    </div>
                    <div>
                        <label for="cv">{{__('ui.Load_CV')}}</label>
                        <input class="form-control" type="file" name="cv" required>
                    </div>
                    <div class="text-center">
                        <a href="{{route('home')}}" class="btn text-decoration-none bg-dark text-light Indietro"> {{__('ui.Go_Back')}} </a>
                        <button type="submit" class="btn colorBtn2 text-center">{{__('ui.Send')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
</x-layout>