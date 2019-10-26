<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Webpage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
        img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" style="margin-left:20px" href="#">AIW-BLOG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('news')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach($cate1 as $cate2)
                        <a class="dropdown-item" href="{{route('news-categories', $cate2->id)}}">{{$cate2->cate_name}}</a>
                        @endforeach
                        
                    </div>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tags
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach($tag1 as $tag2)
                        
                        <a class="dropdown-item" href="{{route('news-tags', $tag2->id)}}">{{$tag2->tag_name}}</a>
                        @endforeach
                    </div>
                </li>
                
            </ul>
            
        </div>
        
        <div class="" style="margin-right:20px">
        {{-- <form action="{{route('create')}}" method="get"> --}}
            <a href="{{route('create')}}" class="btn btn-success btn-small">
                    <span class="btn-label">
                        <i class="fa fa-plus"></i>
                    </span>
                    Add new blog
                </a>
            {{-- </form> --}}
            
            {{-- <form action="{{route('create-news')}}" method="post"> --}}
                        
                        
                    {{-- <div class="card-body login"> --}}
                        {{-- <div class="form-group">
                            <label  class="placeholder"><b>News ID:</b></label>
                            <input  type="text" name="news_id"  placeholder="enter nickname" class="form-control " display=false required value="{{$news->id}}" readonly >
                        </div>
                        <div class="form-group">
                            <label  class="placeholder"><b>Nickname:</b></label>
                            <input  type="text" name="username"  placeholder="enter nickname" class="form-control " required >
                        </div>
                        <div class="form-group">
                            <label  class="placeholder"><b>Type comment here:</b></label>
                            <textarea name="content" required class="form-control" placeholder="Comment here"></textarea>
                            <br>
                        </div> --}}
                        
                        {{-- <button type="submit" class="btn btn-success">
                            Add new blog
                        </button>  --}}
                    {{-- </div> --}}
                {{-- </form> --}}
        </div>
    </nav>
    {{-- end navbar --}}
    <br>
    @yield('content')
    <br>
    {{-- footer --}}
    <footer>
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">A product of VCL team</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </footer>
    {{-- end footer --}}
</body>
</html>