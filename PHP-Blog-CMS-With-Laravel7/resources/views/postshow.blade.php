@include('header')

<div class="container-fluid ml-4 mr-4">
    <h1>{{$post->postHeader}}</h1>
    <h6>
        {{$post->postContent}}
    </h6>
</div>

@include('footer')