<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Post</title>
</head>
<body>
    
    <section style="padding-top: 60px;">
    
        <div class="container">
       
            
                    <div class="card ">
                    
                        <div class="card-header bg-primary text-white">
                             <h1>Post</h1> 
                        </div>
                    
                        @if(Session::has('post_created'))
                        <div class="alert alert-success">
                            {{Session::get('post_created')}}
                        </div>
                        @endif
                        <div class="card-body">
                    <a href="/add-post" class="btn btn-primary">Add post</a>

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Title</td>
                                        <td>Description</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{$post->id}}</td>
                                            <td>{{$post->title}}</td>
                                            <td>{{$post->content}}</td>
                                            <td>
                                                <a href="/posts/{{$post->id}}" class="btn btn-info">Details</a>
                                                <a href="/edit-post/1" class="btn btn-success">Edit</a>
                                                <a href="/delete-post/{{$post->id}}" class="btn btn-danger">Delete</a>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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