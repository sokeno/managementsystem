<link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<div class="row">

<div class="col-md-6">
                        <h3>Register</h3>
                        <form action="{{route('register')}}" method="post">
                                <div class="form-group">
                                        <label for="email">Your E-Mail</label>
                                        <input class="form-control" type="text" name="email" id="email">
                                </div>

                                <div class="form-group">
                                        <label for="first_name">Your first name</label>
                                        <input class="form-control" type="text" name="first_name" id="first_name">
                                </div>
                                <div class="form-group">
                                        <label for="password">Your Password</label>
                                        <input class="form-control" type="password" name="password" id="password">
                                </div>
                                <button type="submit " class="btn btn-primary">Submit</button>
                                <input type="hidden" name="_token" value="{{Session::token()}}">

                        </form>


                </div>