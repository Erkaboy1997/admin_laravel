@extends('admin.master')

@section('title','Admin table')

@section('content')


    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Mahsulotlar</li>
            </ol>

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                   Bizning mahsulotlarimiz</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="overflow: auto">
                            <thead>
                            <tr>
                                <th>Rasmi</th>
                                <th>Mahsulot nomi</th>
                                <th>Sarlavhasi</th>

                                <th>Kategoriyasi</th>
                                <th>Sig'imi</th>
                                <th>O'lchami</th>
                            </tr>
                            </thead>

                            <tfoot>
                            <tr>
                                <th>Rasmi</th>
                                <th>Mahsulot nomi</th>
                                <th>Sarlavhasi</th>
                                <th>Kategoriyasi</th>
                                <th>Sig'imi</th>
                                <th>O'lchami</th>
                            </tr>
                            </tfoot>
                            <tbody>

                            <tr>
                                <td style="width: 15%;text-align: center"><img src="{{asset('extra/products/11.png')}}" style="width: 80%" alt=""></td>
                                <td>Ведро 15 литр
                                    с крышкой
                                    </td>
                                <td>Ведро 15 литр
                                    с крышкой
                                    Ведро 12 литр
                                    с крышкой
                                    Ведро 10 литр
                                    с крышко</td>
                                <td>Chelak</td>
                                <td>0.730 kg</td>
                                <td>37.5x37.5x32 sm</td>
                            </tr>

                            <tr>
                                <td style="width: 15%;text-align: center"><img src="{{asset('extra/products/58.png')}}" style="width: 80%" alt=""></td>
                                <td>Ведро 15 литр
                                    с крышкой
                                </td>
                                <td>Ведро 15 литр
                                    с крышкой
                                    Ведро 12 литр
                                    с крышкой
                                    Ведро 10 литр
                                    с крышко</td>
                                <td>Chelak</td>
                                <td>0.730 kg</td>
                                <td>37.5x37.5x32 sm</td>

                            </tr>



                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>



        </div>

        @endsection