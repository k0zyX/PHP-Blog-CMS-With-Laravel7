    @include('header')
    <div class="container-fluid row">
        
        @foreach($posts as $post)
        <div class="card col-3 mr-4 ml-4 mt-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $post->postHeader }}</h5>
                <p class="card-text">{{ substr($post->postContent,0,50)}} ...</p>
                <a href="{{url('/post/'.$post->id)}}" class="btn btn-primary">Read Post</a>
                <p class="card-text"><small class="text-muted">Created at {{$post->created_at}}</small></p>
            </div>
        </div>
        @endforeach
    </div>
    @include('footer')