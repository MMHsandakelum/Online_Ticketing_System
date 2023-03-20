<div class="card updatecard">
    <div class="card-header pb-0 p-3">
        <h6 class="mb-0">Update Banner</h6>
    </div>
    <div class="card-body p-3">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="formleft">
                @csrf
                @method('PUT')
                <div class="informations">
                    <p><span>Customer Name</span> : {{ $ticket_data->customer_name }}</p>
                </div>
            </div>
            <div class="formright">
                <div class="form-group">
                    <label for="exampleInputAddress">Description</label>
                    <input type="text" class="form-control" id="exampleInputAddress"
                        placeholder="Describe your banner" name="description" value=>
                </div>
                <div class="submitbtn">
                    <button type="submit" class="btn btn-primary small-btn">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
