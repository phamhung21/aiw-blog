@extends('layouts.app')
@section('content')
{{-- content homepage --}}
<div class="container-fluid bd-content">
    <div class="row">
        <h2 style="margin:auto">NEWS BY CATEGORIES</h2>
    </div>
    <hr>
    <div class="row">
        
        {{-- category --}}
        <div class="col-2, witdh: 220px" style="margin-left: 20px">
            {{-- <div class="card">
                <div class="card-header">
                    <strong>News Category</strong> 
                </div>
                <div class="card-body" style="font-size:12px">
                    Name of Category 1
                </div>
                <div class="card-body" style="font-size:12px">
                    Name of Category 1
                </div>
                <div class="card-body" style="font-size:12px">
                    Name of Category 1
                </div>
                <div class="card-body" style="font-size:12px">
                    Name of Category 1
                </div>
            </div> --}}
        </div>
        {{-- end category --}}
        
        {{-- news --}}
        
        <div class="col">
            
            {{-- <div class="card">
                <div class="card-header">
                    Latest news
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            Latest
                        </div>
                        <div class="col">
                            second latest
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- end latest news --}}
            {{-- <hr> --}}
            {{-- random news --}}
            <div class="card">
                @foreach($news as $new )
                
                <div class="col">
                    <div class="row">
                        {{-- <div class="col-3">
                            image here
                        </div> --}}
                        <div class="col row">
                            <div class="col-12">
                               {{-- {{$new->title}} --}}
                                <a href="{{route('detail-news', $new->id)}}"> {{$new->title}} </a>                  
                            </div>
                            {{-- <div class="col-12">
                                <a href="">category here</a>
                            </div> --}}
                            <div class="col-12">
                                {{$new->short_intro}}...  
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
                @endforeach
                {{-- <div class="col">
                    <div class="row">
                        <div class="col-3">
                            image here
                        </div>
                        <div class="col row">
                            <div class="col-12">
                                title here                     
                            </div>
                            <div class="col-12">
                                category here
                            </div>
                            <div class="col-12">
                                short desc
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-3">
                            image here
                        </div>
                        <div class="col row">
                            <div class="col-12">
                                title here                     
                            </div>
                            <div class="col-12">
                                category here
                            </div>
                            <div class="col-12">
                                short desc
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-3">
                            image here
                        </div>
                        <div class="col row">
                            <div class="col-12">
                                title here                     
                            </div>
                            <div class="col-12">
                                category here
                            </div>
                            <div class="col-12">
                                short desc
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-3">
                            image here
                        </div>
                        <div class="col row">
                            <div class="col-12">
                                title here                     
                            </div>
                            <div class="col-12">
                                category here
                            </div>
                            <div class="col-12">
                                short desc
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            {{-- end random news --}}
            <br>
            
            {{-- random category --}} 
            {{-- <div class="row">
                <div class="col">
                    <div class="card">
                        <h2>Cate 1</h2>
                        image news 1 <br>
                        title news 1
                        <hr>
                        title news 2
                        <hr>
                        title news 3
                    </div> 
                </div>
                <div class="col">
                    <div class="card">
                        <h2>Cate 1</h2>
                        image news 1 <br>
                        title news 1
                        <hr>
                        title news 2
                        <hr>
                        title news 3
                    </div> 
                </div>
                <div class="col">
                    <div class="card">
                        <h2>Cate 1</h2>
                        image news 1 <br>
                        title news 1
                        <hr>
                        title news 2
                        <hr>
                        title news 3
                    </div> 
                </div>
            </div> --}}
            {{-- end random category --}}
        </div>
        {{-- end news --}}
        
        {{-- tag --}}
        <div class="col-2, witdh: 220px" style="margin-right: 20px">
            {{-- <div class="card">
                <div class="card-header">
                    <strong> News Tags</strong>
                </div>
                <div class="card-body" style="font-size:12px">
                    Name of Tag
                </div>
                <div class="card-body" style="font-size:12px">
                    Name of Tag
                </div>
                <div class="card-body" style="font-size:12px">
                    Name of Tag
                </div>
                <div class="card-body" style="font-size:12px">
                    Name of Tag
                </div>
            </div> --}}
        </div>
        {{-- end tag --}}
    </div>
</div>
{{-- end content homepage --}}
@endsection