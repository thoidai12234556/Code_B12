@extends('master')
@section('tieu_de')
    Danh sach don hang
@endsection

@section('noi_dung')
    <div id="app">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-center">
                            <h1>Danh sách đơn hàng</h1>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-bordered text-center">
                                <table class="table mb-0">
                                    <thead>
                                        <tr class="bg-primary text-light">
                                            <th>#</th>
                                            <th>MÃ ĐƠN HÀNG</th>
                                            <th>SỐ LƯỢNG</th>
                                            <th>SỐ ĐIỆN THOẠI</th>
                                            <th>ĐỊA CHỈ</th>
                                            <th>GHI CHÚ</th>
                                            <th>TRẠNG THÁI</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>DZ01</td>
                                            <td>4</td>
                                            <td>123456789</td>
                                            <td>Đà Nẵng</td>
                                            <td><button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target=".bs-example-modal-xl">!</button></td>
                                            <td><button type="button" class="btn btn-warning text-dark">Chưa thanh
                                                    toán</button></td>
                                            <td><button type="button"
                                                    class="btn btn-outline-primary waves-effect waves-light width-md"
                                                    data-toggle="modal" data-target=".bs-example-modal-xl1">Xem chi
                                                    tiết</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>DZ02</td>
                                            <td>2</td>
                                            <td>123456789</td>
                                            <td>Đà Nẵng</td>
                                            <td><button type="button" class="btn btn-primary">!</button></td>
                                            <td><button type="button" class="btn btn-primary text-dark">Đã thanh
                                                    toán</button>
                                            </td>
                                            <td><button type="button"
                                                    class="btn btn-outline-primary waves-effect waves-light width-md"
                                                    data-toggle="modal" data-target=".bs-example-modal-xl1">Xem chi
                                                    tiết</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>DZ03</td>
                                            <td>5</td>
                                            <td>123456789</td>
                                            <td>Đà Nẵng</td>
                                            <td><button type="button" class="btn btn-primary">!</button></td>
                                            <td><button type="button" class="btn btn-warning text-dark">Chưa thanh
                                                    toán</button></td>
                                            <td><button type="button"
                                                    class="btn btn-outline-primary waves-effect waves-light width-md"
                                                    data-toggle="modal" data-target=".bs-example-modal-xl1">Xem chi
                                                    tiết</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>DZ04</td>
                                            <td>8</td>
                                            <td>123456789</td>
                                            <td>Đà Nẵng</td>
                                            <td><button type="button" class="btn btn-primary">!</button></td>
                                            <td><button type="button" class="btn btn-warning text-dark">Chưa thanh
                                                    toán</button></td>
                                            <td><button type="button"
                                                    class="btn btn-outline-primary waves-effect waves-light width-md"
                                                    data-toggle="modal" data-target=".bs-example-modal-xl1">Xem chi
                                                    tiết</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>DZ05</td>
                                            <td>4</td>
                                            <td>123456789</td>
                                            <td>Đà Nẵng</td>
                                            <td><button type="button" class="btn btn-primary">!</button></td>
                                            <td><button type="button" class="btn btn-primary text-dark">Đã thanh
                                                    toán</button>
                                            </td>
                                            <td><button type="button"
                                                    class="btn btn-outline-primary waves-effect waves-light width-md"
                                                    data-toggle="modal" data-target=".bs-example-modal-xl1">Xem chi
                                                    tiết</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            {{-- modal của ghi chú --}}
                            <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog"
                                aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myExtraLargeModalLabel">Ghi chú</h4>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-dark mb-0 text-left" role="alert">
                                                Ship tận giường nhé!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.modal -->

                            {{-- modal của Action --}}
                            <div class="modal fade bs-example-modal-xl1" tabindex="-1" role="dialog"
                                aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myExtraLargeModalLabel">Chi tiết đơn
                                                hàng</h4>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="table-responsive text-center">
                                                <table class="table mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Mã sản phẩm</th>
                                                            <th>Tên sản phẩm</th>
                                                            <th>Hình ảnh</th>
                                                            <th>Số lượng</th>
                                                            <th>Giá</th>
                                                        </tr>
                                                    </thead>
                                                    <template v-for="(v,k) in list_don_hang[0].chi_tiet_don_hang">
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row"> @{{ k+1 }} </th>
                                                                <td> @{{ v.ma_san_pham }} </td>
                                                                <td> @{{ v.ten_san_pham }} </td>
                                                                <td><img class="img-fluid card-img-top"
                                                                        v-bind:src="v.hinh_anh" alt="img-placeholder" style="width: 100px; height: auto;"></td>
                                                                <td> @{{ v.so_luong }} </td>
                                                                <td> @{{ v.gia }} </td>
                                                            </tr>
                                                        </tbody>
                                                    </template>
                                                </table>
                                            </div>

                                            {{-- Bảng chi tiết --}}

                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.modal -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('noi_dung_js')
    {{-- co moi dung Modal dc --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script>
        new Vue({
            el: '#app',
            data: {
                list_don_hang: [{
                    'ma_don_hang': "DZO1",
                    'so_luong': 4,
                    'so_dien_thoai': 123123123,
                    'dia_chi': 'Da Nang',
                    'trang_thai': 0,
                    'ghi_chu': 'Giao hàng tận giường',
                    'chi_tiet_don_hang': [{
                            'ma_san_pham': "IP14",
                            'ten_san_pham': 'Iphone14Pro',
                            'hinh_anh': 'https://cdn2.cellphones.com.vn/x358,webp,q100/media/catalog/product/x/_/x_m_16.png',
                            'so_luong': 2,
                            'gia': 100000
                        },
                        {
                            'ma_san_pham': "IP13",
                            'ten_san_pham': 'Iphone13Pro',
                            'hinh_anh': 'https://cdn.tgdd.vn/Products/Images/42/230521/iphone-13-pro-thumb-600x600.jpg',
                            'so_luong': 2,
                            'gia': 100000
                        }
                    ]
                }, ],
            },
            created() {
                // console.log(this.list_don_hang[0].chi_tiet_don_hang);
            },
            methods: {
                // xyz(v, k) {
                //     if (this.list[k].tinh_trang == 0) {
                //         this.list[k].tinh_trang = 1;
                //     } else {
                //         this.list[k].tinh_trang = 0;
                //     }
                // },
            },

        });
    </script>
@endsection
