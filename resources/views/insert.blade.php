

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h3>Add User</h3>
                <form action="{{ route('insertUsers') }}"  method="post">
                    @csrf
                
                    <label for="name">First Name:</label>
                    <input type="text" name="name" value="" required>
                    <input type="hidden" name="id" value="" >
                    
                    <label for="lastName">Last Name:</label>
                    <input type="text" name="lastName" value="" required>

                    <label for="email">Email:</label>
                    <input type="email" name="email" value="" required>
                    <label for="birthday">Birthday:</label>
                    <input type="date" name="birthday" value="" required>
                    <label for="address">Address:</label>
                    <input type="text" name="address" value="" required>
                    <label for="password">Password:</label>
                    <input type="password" name="password" value="" required>
                   


                   

                    <button type="submit" class="btn btn-rounded btn-success">Save  User</button>
                   
                    
                </form>
            </div>
        </div>
    </div>
</div>
