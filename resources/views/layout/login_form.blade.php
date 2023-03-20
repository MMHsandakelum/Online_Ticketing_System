<div class="loginform" style="margin:20px auto; width:400px">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <center><span>
                        <h3>Admin Login</h3>
                    </span></center>
                <br>
                <input type="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email"
                    name="email">
                <br>
                <input type="password" class="form-control form-control-lg" id="" name="password">


                <div class="text-center">
                    <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Sign in</button>
                </div>
            </form>
        </div>
    </div>
</div>
