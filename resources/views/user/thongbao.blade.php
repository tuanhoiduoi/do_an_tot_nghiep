@extends('layout_user')
@section('content')
<div class="container">
    <div class=" row">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/3"><i class="fa fa-home"></i> Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Phim</li>
          </ol>
        </nav>
    </div>
		<section>
			<h2 class="title text-center" >
				{{-- <p>PHIM ĐANG CHIẾU</p> --}}
			</h2>
            <div class="image-contraiter"  >
                <div class=" d-flex justify-content-center align-items-center" style="height: 300px">
                    <h2 class="text-center fs-4 text-uppercase" >Phim bạn tìm không thấy</h2>
                </div>
            </div>

</main>
@endsection
