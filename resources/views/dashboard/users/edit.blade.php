@extends('layouts.dashboard.master' , ['title' => 'Users'])
@section('content')
<div class="px-4 mt-4 container-xl">
    <!-- Account page navigation-->
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="mb-4 card mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="text-center card-body">
                    <!-- Profile picture image-->

                    <img class="mb-2 img-account-profile rounded-circle" src="{{$user->avatar}}" alt="">
                    <!-- Profile picture help block-->
                    <div class="mb-4 small font-italic text-muted">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <button class="btn btn-primary" type="button">Upload new image</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="mb-4 card">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form action="{{ route('user.update',$user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="mb-1 small" for="inputUsername">Full Name</label>
                            <input class="form-control" name="name" id="inputUsername" type="text" placeholder="Enter your username" value="{{$user->name}}">
                        </div>
                        <!-- Form Row        -->
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="mb-1 small" for="inputEmailAddress">Email address</label>
                            <input class="form-control" name="email" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="{{$user->email}}">
                        </div>
                        <!-- Form Row-->
                        {{-- <div class="mb-3 row gx-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="mb-1 small" for="inputPhone">Phone number</label>
                                <input class="form-control" name="name" id="inputPhone" type="text" placeholder="Enter your phone number" value="{{$user->phone ? $user->phone : '' }}">
                            </div>
                        </div> --}}
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="submit">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
