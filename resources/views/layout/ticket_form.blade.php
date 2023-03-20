<div class="row mt-4">
    <div class="col-lg-5">
        <div class="card addbannercard">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-0">ADD YOUR TICKET HERE</h6>
            </div>
            <div class="card-body p-3">
                <form action="{{ url('create_ticket') }}" method="post" enctype="multipart/form-data">@csrf
                    <div class="formleft">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Customer Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="customer_name"
                                aria-describedby="emailHelp" placeholder="Name">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputAddress">Email</label>
                            <input type="email" class="form-control" name="email" id="exampleInputAddress"
                                placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputAddress">Phone Number</label>
                            <input type="text" class="form-control" id="exampleInputAddress" name="phone_number"
                                placeholder="Mobile" required>
                        </div>
                    </div>
                    <div class="formright">
                        <div class="form-group">
                            <label for="exampleInputAddress">Problem Description</label>
                            <textarea class="form-control" id="Textarea" rows="5" name="problem_description"></textarea>
                        </div>
                    </div></br>
                    <div class="submitbtn">
                        <button type="submit" class="btn btn-primary small-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
