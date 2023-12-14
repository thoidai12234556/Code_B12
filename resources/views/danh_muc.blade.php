@extends('master')
@section('tieu_de')
    Danh muc san pham
@endsection

@section('noi_dung')
    <div class="row">
        <div class="col-md-12 col-lg-5">
            <div class="card-box">
                <div class="card-header">
                    <h4 class="header-title">Them moi danh muc</h4>
                </div>

                <div class="card-body">
                    <form role="form" class="parsley-examples" novalidate="">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Ten danh muc<span
                                    class="text-danger"></span></label>
                            <div class="col-sm-7">
                                <input type="email" required="" parsley-type="email" class="form-control"
                                    id="inputEmail3" placeholder="Ten danh muc">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hori-pass1" class="col-sm-4 col-form-label">Slug Danh Muc<span
                                    class="text-danger"></span></label>
                            <div class="col-sm-7">
                                <input id="hori-pass1" type="password" placeholder="Slug danh muc" required=""
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Tình Trạng<span
                                    class="text-danger"></span></label>
                            <div class="col-sm-7">
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Danh muc cha<span
                                    class="text-danger"></span></label>
                            <div class="col-sm-7">
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card-footer text-right">
                    <button type="button" class="btn btn-primary waves-effect waves-light width-md">Them moi</button>
                </div>

            </div>
        </div>

        <div class="col-7">
            <div class="card-box">
                <div class="card-header">
                    <h4 class="header-title">Thong tin danh muc</h4>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Ten danh muc</th>
                                    <th>Slug danh muc</th>
                                    <th>Tinh trang</th>
                                    <th>Danh muc cha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
