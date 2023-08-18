@extends('admin.layout.main-layout')
@section('main-container')
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    <div class="panel">
                        <div class="panel-body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Department Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Sinaai-Waas</td>
                                        <td>
                                            <a href="#" data-tip="edit"><i class="fa fa-edit px-3"></i></a>
                                            <a href="#" data-tip="delete"><i class="fa fa-trash px-3"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
