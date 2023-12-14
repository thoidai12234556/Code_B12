@extends('master')
@section('tieu_de')
    Chương Trình Quản Lí Nhiệm Vụ
@endsection

@section('noi_dung')
    <div id="app">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="card-box">
                    <div class="card-header">
                        <h4 class="header-title">Thêm mới nhiệm vụ</h4>
                    </div>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Nhập vào nhiệm vụ"
                                aria-label="Recipient's username">
                            <div class="input-group-append">
                                <button class="btn btn-dark waves-effect waves-light" type="button">Thêm mới công
                                    việc</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-6">
                <div class="card-box">
                    <div class="card-header">
                        <h4 class="header-title">Danh sách chưa hoàn thành</h4>
                    </div>
                    <div class="card-body">
                        <template v-for="(v,k) in list">
                            <div class="alert alert-danger bg-white text-danger" role="alert">
                                <button type="button" class="close" aria-label="Close">
                                </button>
                                @{{ v.ten_cong_viec }}
                                <div class="text-right">
                                    <button v-on:click="xyz(v,k)" v-if="v.tinh_trang == 0"
                                        class="btn btn-primary">Ok</button>
                                    <button type="submit" class="btn btn-primary">Cancel</button>
                                </div>
                            </div>
                        </template>
                    </div>

                </div>
            </div>

            <div class="col-6">
                <div class="card-box">
                    <div class="card-header">
                        <h4 class="header-title">Danh sách đã hoàn thành</h4>
                    </div>
                    <div class="card-body">
                        <template v-for="(v,k) in list">
                            <div class="alert alert-primary bg-white text-primary fade show" role="alert">
                                <button type="button" class="close" aria-label="Close">
                                </button>
                                @{{ v.ten_cong_viec }}
                                <div class="text-right">
                                    <button v-on:click="xyz(v,k)" class="btn btn-warning">Undo</button>
                                </div>
                            </div>
                        </template>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('noi_dung_js')
    <script>
        new Vue({
            el: '#app',
            data: {
                list: [
                    {
                        'ten_cong_viec': 'Đi chơi với người yêu mới',
                        'tinh_trang': 0
                    },
                    {
                        'ten_cong_viec': 'Chui vào hang',
                        'tinh_trang': 1
                    },
                    {
                        'ten_cong_viec': 'Đi uống trà sữa',
                        'tinh_trang': 0
                    },
                    {
                        'ten_cong_viec': 'Đi ăn bún bò',
                        'tinh_trang': 0
                    },
                    {
                        'ten_cong_viec': 'Code bài tập về nhà',
                        'tinh_trang': 1
                    },
                ],
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
