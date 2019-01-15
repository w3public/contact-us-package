<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <title>Contact us</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 pb-5">
            <!--flash messages-->
            @foreach (['success', 'danger', 'warning', 'info'] as $key => $msg)
                @if(session($msg))
                    <div class="flash-messages">
                        <div class="alert alert-{{ $msg }} alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <p>{!! session($msg) !!}</p>
                        </div>
                    </div>
                @endif
            @endforeach
            <!--/flash messages-->
            <!--validation error messages-->
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="error-messages">
                        <div class="alert alert-danger alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <p>{{$error}}</p>
                        </div>
                    </div>
                @endforeach
            @endif
            <!--/validation error messages-->

            <h2 class="text-center">Contact Form</h2>
            <form action="{{route('contact-us')}}" method="post">
                @csrf
                <div class="card border-primary rounded-0">
                    <div class="card-header p-0">
                        <div class="bg-info text-white text-center py-2">
                            <h3><i class="fa fa-envelope"></i> Contact us</h3>
                            <p class="m-0">We will gladly help you</p>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                </div>
                                <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                </div>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                </div>
                                <textarea name="description" class="form-control" placeholder="Message" required></textarea>
                            </div>
                        </div>

                        <div class="text-center">
                            <input type="submit" value="Submit" class="btn btn-info btn-block rounded-0 py-2">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>