<section id="aa-myaccount">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-myaccount-area">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="aa-myaccount-register">
                                <h4 style="text-align: center">Register</h4>
                                <form action="{{ route('register.custom') }}" method="POST"
                                    enctype="multipart/form-data" class="aa-login-form">
                                    @csrf
                                    <div>
                                        <label for="">Username<span>*</span></label>
                                        <input type="text" placeholder="Name" id="name" class="text-danger"
                                            name="name" required autofocus>
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>

                                    <div>
                                        <label for="">Email address<span>*</span></label>
                                        <input type="text" placeholder="Email" id="email_address" name="email"
                                            required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    <div>
                                        <label for="password">Password<span>*</span></label>
                                        <input type="password" placeholder="Password" id="password" name="password"
                                            required>
                                            @error('password')
                                            <span class="invalid-feedback" style="color: #ff0000" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="password"> Comfirm Password<span>*</span></label>
                                        <input type="password"  placeholder="Comfirm Password" id="password"
                                            name="password_confirmation" required>
                                    </div>

                                    <button type="submit" class="aa-browse-btn">Register</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
