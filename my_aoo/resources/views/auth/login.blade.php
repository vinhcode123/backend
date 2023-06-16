
<!-- Login Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4>Login or Register</h4>
                <form class="aa-login-form"  action="{{ route('login.custom') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">Username or Email address<span>*</span></label>
                    <input type="text" placeholder="Username or email"  id="email" class="form-control" name="email" required/>

                    <label for="">Password<span>*</span></label>
                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required />

                    <button class="aa-browse-btn" type="submit">Login</button>

                    <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme" name="rememberme" />
                        Remember me
                    </label>
                    <p class="aa-lost-password">
                        <a href="#">Lost your password?</a>
                    </p>
                    <div class="aa-register-now">
                        Don't have an account?<a href="{{Route('account')}}">Register now!</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
