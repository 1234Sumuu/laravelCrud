<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=Larac, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel_Crud</title>
    <link rel="stylesheet" href="assets/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class ="col-sm-4 offset-sm-4">
                <form action="crud_save" method="post">
                    @csrf
                    <div class ="card">
                        <div class ="card-header">
                            <b>Add Customer...</b>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" value = "{{old('name')}}" class ="form-control" name ="name" placeholder="Enter Customer Name">
                            <span class ="text-danger">@error('name'){$message} @enderror</span>

                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" value = "{{old('email')}}" class ="form-control" name ="email" placeholder="Enter Customer email">
                            <span class ="text-danger">@error('email'){$message} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="name">Mobile</label>
                            <input type="text" value = "{{old('mobile')}}" class ="form-control" name ="mobile" placeholder="Enter Customer Mobile Number">
                            <span class ="text-danger">@error('mobile'){$message} @enderror</span>
                        </div>
        
                        </div>
                        <div class= "card-footer">
                            <button class ="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        

        {{-- <div class ="row">
            <div class="col-sm-12">
                <h1>Customer List</h1>
                <table class ="table table-hovered table-stripped">
                    <thead>
                        @foreach($customer_list as $data)
                        <tr>
                            <th>SNo.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data-> mobile}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>  --}}

    </div> 
</body>
</html>