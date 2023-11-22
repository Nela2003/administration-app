

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h3>Edit User</h3>
                <form action="{{ route('users.save') }}"  method="post">
                    @csrf
                
                    <label for="name">First Name:</label>
                    <input type="text" name="name" value="{{ $users->name }}" required>
                    <input type="hidden" name="id" value="{{ $users->id }}" >
                    
                    <label for="lastName">Last Name:</label>
                    <input type="text" name="lastName" value="{{ $users->lastName }}" required>

                    <label for="email">Email:</label>
                    <input type="email" name="email" value="{{ $users->email }}" required>
                    <label for="birthday">Birthday:</label>
                    <input type="date" name="birthday" value="{{ $users->birthday }}" required>
                    <label for="address">Address:</label>
                    <input type="text" name="address" value="{{ $users->address }}" required>
                   


                   

                    <button type="submit" class="btn btn-rounded btn-success">Save  User</button>
                   
                    
                </form>
            </div>
        </div>
    </div>
</div>
