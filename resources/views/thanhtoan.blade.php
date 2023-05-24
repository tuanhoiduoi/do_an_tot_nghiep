<form action="{{url('/momo_payment')}}" method="POST">
    @csrf
    <input type="hidden" name="momo" value="">
    <button type="submit" class="btn btn-default check_out" value="">Thanh toán</button>
</form>
