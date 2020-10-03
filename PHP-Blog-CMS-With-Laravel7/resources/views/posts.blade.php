    @include('header')
    <div class="container-fluid row">
        
        @foreach($posts as $post)
        <div class="card col-3 mr-4 ml-4 mt-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$post->postHeader}}</h5>
                <p class="card-text">{{$post->postContent}}</p>
                <a href="{{url('/edit/'.$post->id)}}" class="btn btn-primary">Read Post</a>
            </div>
        </div>
        @endforeach
    </div>
    @include('footer')