
    <input type="hidden" name="cmd" value="_cart">
    <input type="hidden" name="upload" value="1">

    <input type="hidden" name="business" value="petersondohbila@gmail.com">

        <?php $count=0;?>
    @foreach($products as $product)
        <?php $count++;?>
        <input type="hidden" name="item_name_{{$count}}" value="{{$product['item']['title']}}">
            <input type="hidden" name="amount_{{$count}}" value="{{$product['price']}}">

            <input type="hidden" name="shipping_{{$count}}" value="0.50">

        <input type="hidden" name="cancel_return" id="cancel_return" value="http://localhost:8000/shopping-cart" />
    @endforeach

    <input name="submit"  type="image" src="{{asset('img/paypal2.png')}}" value="PayPal" formaction="https://www.paypal.com/cgi-bin/webscr">



