

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h3>Add department </h3>
                <form action="{{ route('add') }}"  method="post">
                    @csrf
                
                    <label for="name">Name:</label>
                    <input type="text" name="name" value="" required>
                    
                    
                   
                   

                    <button type="submit" class="btn btn-rounded btn-success">Save  Department</button>
                   
                    
                </form>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            </div>
        </div>
    </div>
</div>
