

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h3>Edit Department Name</h3>
                <form action="{{ route('savedepart') }}"  method="post">
                    @csrf
                
                    <label for="departi">Edit department  Name:</label>
                    <input type="text" name="departi" value="{{ $departments->name }}" required>
                    <input type="hidden" name="id" value="{{ $departments->id }}" >
                 
                    
                    

                    <button type="submit" class="btn btn-rounded btn-success">Save  Department</button>
                   
                    
                </form>
            </div>
        </div>
    </div>
</div>
