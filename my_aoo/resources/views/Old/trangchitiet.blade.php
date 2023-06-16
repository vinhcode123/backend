@extends('dashboard')
@section('content')
<style>
.gradient-custom {
    /* fallback for old browsers */
    background: #f6d365;

    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
}
</style>
<section class="vh-100" style="background-color: #f4f5f7;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-6 mb-4 mb-lg-0">
                <div class="card mb-3" style="border-radius: .5rem;">



                    <div class="row g-0">
                        <div class="col-md-4 gradient-custom text-center text-white"
                            style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                            <img src="../upload/{{$users->image}}" alt="Avatar" class="img-fluid my-5" style="width: 150px; height: 150px; 
                                border-radius: 10px;" />
                            <h4>{{$users ->name}}</h4>
                            <i class=" far fa-edit mb-5"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body p-4">
                                <h6>Information</h6>
                                <hr class="mt-0 mb-4">
                                <div class="row pt-1">
                                    <div class="col-6 mb-3">
                                        <h6>Email</h6>
                                        <p class="text-muted">{{$users ->email}}</p>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6>Phone</h6>
                                        <p class="text-muted">{{$users ->phone}}</p>
                                    </div>
                                </div>
                                <h6>Date create</h6>
                                <hr class="mt-0 mb-4">
                                <div class="row pt-1">
                                    <div class="col-6 mb-3">
                                        <h6>created_at</h6>
                                        <p class="text-muted">{{$users ->created_at}}</p>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6>updated_at</h6>
                                        <p class="text-muted">{{$users ->updated_at}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <a href="{{ route('trangchu') }}"><i class="fa-sharp fa-solid fa-arrow-left"></i></a>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/51a2bee5af.js" crossorigin="anonymous"></script>
</section>
@endsection