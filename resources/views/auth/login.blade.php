@extends('layouts.auth')

@section('content')
<div class="well no-padding">
    <form action="{{URL::to('login')}}" id="login-form" class="smart-form client-form" method="POST" >
        {!! csrf_field() !!}

        <header>
            Sign In
        </header>

        <fieldset>

            <section>
                <label class="label">E-mail</label>
                <label class="input"> <i class="icon-append fa fa-user"></i>
                    <input type="email" name="email" value="{{ old('email') }}">
                    <b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Please enter email address/username</b></label>
            </section>

            <section>
                <label class="label">Password</label>
                <label class="input"> <i class="icon-append fa fa-lock"></i>
                    <input type="password" name="password" id="password">
                    <b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Enter your password</b> </label>

            </section>
            <section>
                <label class="checkbox">
                    <input type="checkbox" name="remember" checked="">
                    <i></i>Stay signed in</label>
            </section>


        </fieldset>
        <footer>
            <button type="submit" class="btn btn-primary">
                Sign in
            </button>
        </footer>
    </form>

</div>

<script type="text/javascript">
    $(function() {
        // Validation
        $("#login-form").validate({
            // Rules for form validation
            rules : {
                email : {
                    required : true,
                    email : true
                },
                password : {
                    required : true,
                    minlength : 3,
                    maxlength : 20
                }
            },

            // Messages for form validation
            messages : {
                email : {
                    required : 'Please enter your email address',
                    email : 'Please enter a VALID email address'
                },
                password : {
                    required : 'Please enter your password'
                }
            },

            // Do not change code below
            errorPlacement : function(error, element) {
                error.insertAfter(element.parent());
            }
        });
    });
</script>

@endsection