<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Banners</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="./assets/css/table.css" rel="stylesheet" />

<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>Tickets</b></h2>
                    </div>
                    <div class="btn-group">
                        <div class="col-sm-6">
                            <a href="{{ url('/home') }}" class="btn btn-success" data-toggle="modal"> <span>Back To
                                    Home</span></a>
                        </div>

                    </div>

                </div>
            </div>
            {{-- @dd($tickets) --}}
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center">Referance Number</th>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Description</th>
                        <th>States</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tickets as $ticket)
                        {{-- @dd($ticket) --}}
                        <tr>
                            <td>{{ $ticket->id }}</td>
                            <td>{{ $ticket->customer_name }}</td>
                            <td>{{ $ticket->email }}</td>
                            <td>{{ $ticket->problem_description }}</td>
                            <td>{{ $ticket->status }}</td>
                            <td>{{ $ticket->created_at }}</td>
                            <td>{{ $ticket->updated_at }}</td>
                            <td>

                                <a href="{{ route('ticket.view_ticket', $ticket->id) }}" class="view"><i
                                        class="material-icons" data-toggle="tooltip">&#xe8f4;</i></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{-- {!! $banners->links() !!} --}}
            <div class="clearfix">

                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>

</body>

</html>
