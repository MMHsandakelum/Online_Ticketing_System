<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Document</title>
</head>

<body style="background-color: rgb(228, 231, 231)">
    <div class="row mt-4">

        <div class="card updatecard" style="margin:100px auto; width:500px">
            <div class="card-header pb-0 p-3" style="margin:10px">
                <center>
                    <h6 class="mb-0" style="padding: 10px">REFERENCE NO : {{ $ticket_data->id }}</h6>
                </center>
            </div>
            <div class="card-body p-3">
                <form action="{{ url('reply/' . $ticket_data->id) }}" method="post" enctype="multipart/form-data">
                    <div class="formleft">
                        @csrf
                        @method('POST')
                        <center>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Name : </td>
                                        <td>{{ $ticket_data->customer_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email : </td>
                                        <td>{{ $ticket_data->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Mobile : </td>
                                        <td>{{ $ticket_data->phone_number }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <b><span>Problem Description</span></b>
                            <p>{{ $ticket_data->problem_description }}</p>

                            <div class="form-group">
                                <label for="exampleInputAddress">
                                    <b>Reply</b>
                                </label>
                                <br>
                                <br>
                                <textarea name="reply" id="" cols="40" rows="8">{{ $ticket_data->response }}</textarea>

                            </div>
                            <br>

                            <input type="text" value="{{ Auth::user()->name }}" hidden name="agent_name">
                            <div class="submitbtn">
                                <button type="submit" class="btn btn-primary small-btn">Send</button>
                            </div>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
