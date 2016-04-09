Select Image for product : {{ $id }}
@foreach($images as $image)
    <a href="{{url('selectedImage?img='.$image->data.'&id='.$id)}}"><img src="{{ url('product/'.$image->data) }}" height="120" width="120" alt=""></a>
@endforeach