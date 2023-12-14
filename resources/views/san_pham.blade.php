@extends('master')
@section('tieu_de')
    Quan li san pham
@endsection

@section('noi_dung')
    <div class="row">
        <div class="col-12">
            <div class="col-md-12 col-lg-5">
                <div class="card-box">
                    <div class="card-header">
                        <h4 class="header-title">Them moi san pham</h4>
                    </div>

                    <div class="card-body">
                        <form role="form" class="parsley-examples" novalidate="">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Ten san pham<span
                                        class="text-danger"></span></label>
                                <div class="col-sm-7">
                                    <input type="email" required="" parsley-type="email" class="form-control"
                                        id="inputEmail3" placeholder="Ten danh muc">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hori-pass1" class="col-sm-4 col-form-label">Slug danh muc<span
                                        class="text-danger"></span></label>
                                <div class="col-sm-7">
                                    <input id="hori-pass1" type="" placeholder="Slug danh muc" required=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hori-pass1" class="col-sm-4 col-form-label">Mo ta ngan<span
                                        class="text-danger"></span></label>
                                <div class="col-sm-7">
                                    <input id="hori-pass1" type="" placeholder="Mo ta ngan" required=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hori-pass1" class="col-sm-4 col-form-label">Hinh anh<span
                                        class="text-danger"></span></label>
                                <div class="col-sm-7">
                                    <input id="hori-pass1" type="" placeholder="Hinh anh" required=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hori-pass1" class="col-sm-4 col-form-label">Gia ban<span
                                        class="text-danger"></span></label>
                                <div class="col-sm-7">
                                    <input id="hori-pass1" type="" placeholder="Gia ban" required=""
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hori-pass1" class="col-sm-4 col-form-label">Gia khuyen mai<span
                                        class="text-danger"></span></label>
                                <div class="col-sm-7">
                                    <input id="hori-pass1" type="" placeholder="Gia khuyen mai" required=""
                                        class="form-control">
                                </div>
                            </div>

                        </form>
                    </div>

                    <div class="card-footer text-right">
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Them moi</button>
                    </div>

                </div>
            </div>


            <!-- sample modal content -->
            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <h5>Text in a modal</h5>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Ten san pham</th>
                                            <th>Slug san pham</th>
                                            <th>Mo ta ngan</th>
                                            <th>Hinh anh</th>
                                            <th>Gia ban</th>
                                            <th>Gia khuyen mai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>ccccccccccccccccccccccccccccccc</td>
                                            <td><img src="" alt=""></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>ccccccccccccccccccccccccccccccc</td>
                                            <td><img src="" alt=""></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>ccccccccccccccccccccccccccccccc</td>
                                            <td><img src="" alt=""></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
    </div>
@endsection
