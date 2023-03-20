<!DOCTYPE html>
<html lang="en">
@include ('layout.header')

<body class="g-sidenav-show   bg-gray-200">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    @include ('layout.sidenav')
    <main class="main-content mt-0 ">
        @include ('layout.navbar')


        <div class="container-fluid py-4" style="margin:50px 200px">
            <div class="row mt-4">
                <div class="col-lg-5">
                    <center>
                        <div class="card addbannercard" style="width:500px">
                            <div class="card-header pb-0 p-3">
                                <h6 class="mb-0">Reference No : {{ $searchresult->id }}</h6>
                            </div>
                            <div class="card-body p-3">
                                {{-- {{ url('create_ticket') }} --}}
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Name : </td>
                                            <td>{{ $searchresult->customer_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Email : </td>
                                            <td>{{ $searchresult->email }}</td>
                                        </tr>
                                        <tr>
                                            <td>Mobile : </td>
                                            <td>{{ $searchresult->phone_number }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <b><span>Problem Description</span></b>
                                <p>{{ $searchresult->problem_description }}</p>
                                <br>
                                <b><span>Response</span></b>
                                <p>{{ $searchresult->response }}</p>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </main>

    @include ('layout.footer')

</body>

</html>
