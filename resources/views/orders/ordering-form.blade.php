<form method="post" action="{{route('order.update')}}">

	<input type="hidden" name="_token" value="{{ csrf_token() }}">

    <input type="hidden" name="id" value="{{$product->id}}">

    

    <input type="number" name="qty" value={{$q}} min="1" max="50" required  placeholder="Quantity">

    <input type="submit" class="btn btn-primary" value="Go">

     
</form>