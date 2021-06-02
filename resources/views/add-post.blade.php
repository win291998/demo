<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Add</title>
</head>
<body>
    
    <section style="padding-top: 60px;">
    
        <div class="container">
         <div class="row">
            <div class="col-md-6 offset-md-3">
                    <div class="card ">
                        <div class="card-header bg-primary text-white">
                              Add Post
                        </div>
                        
                    <div class="card-body">
                        <form action="{{route('post.create')}}" method="POST">
                            @csrf
                            <div class="form-group">
                            
                                <label for="title">Post Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter">

                            </div>
                            <div class="form-group">
                            
                                <label for="body">Post Description</label>
                                <textarea name="content" class="form-control" id="" rows="3"></textarea>

                            </div>
                            <input type="submit" value="Add Post" class="btn btn-primary">
                        </form>
                    </div>
                    </div>
                    
             </div>
            </div>
        </div>
    
    </section>

</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>