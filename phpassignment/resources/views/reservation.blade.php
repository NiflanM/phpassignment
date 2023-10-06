<html>
<head>
    <title>Contact us </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
</head>
<body>
    
    <div class="container">
        <h3>Reservation </h3>
        @if(Session::has('flash_message'))
        <div class="alert alert-success">{{Session::get('flash_message')}}</div>
        
        <form action="{{url('reservation')}}" method="POST">
           {{@csrf_field() }}
            
         {{-- <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div> --}}
            <div class="form-group">
                <label for="subject">No of guests </label>
                <select name="subject" id="subject" class="form-control">
                    <option value="2">Complaint</option>
                    <option value="5">Suggestion</option>
                    <option value="more">Enquiry</option>    
                </select>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <textarea name="date" id="date" class="form-control" rows="5"></textarea>
            </div>
            <div class="form-group">
        <button class="btn btn-success" type="submit">Submit</button>
        <button class="btn btn-danger" type="reset">Reset</button>
    </div>
    
        </form>
        
    </div>
</body>

</html>