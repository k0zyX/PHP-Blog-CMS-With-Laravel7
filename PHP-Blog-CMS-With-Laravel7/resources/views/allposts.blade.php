
@include('header')
<div class="container-fluid">
    @foreach($posts as $post)
    <a href="{{url('/post/'.$post->id)}}">
        <h1>{{$post->postHeader}}</h1>
        <h3>{{ substr($post->postContent,0,150)}} ...</h3>
    </a>
    @endforeach
</div>
@include('footer')