@extends('manager.layout.app')

@section('content')

    <div class="container-fluid">
        <section class="content">
            <figure>
                <blockquote class="blockquote">
                    <h2>Kursiyer Listesi</h2>
                </blockquote>
                <figcaption>
                    <span><a href="{{route('manager.dashboard')}}"><i class="fas fa-home"></i> Ana Sayfa</a> /</span>
                    <span><a href="{{route('manager.user-operations')}}"><i class="fas fa-users-cog"></i> Kursiyer İşlemleri</a> /</span>
                    <span class="active">Kursiyer Listesi</span>
                </figcaption>
            </figure>
            <div class="row">
                <div class="col-12 col-lg-12 mt-3">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th>İd</th>
                            <th>Seç</th>
                            <th>Adı Soyadı</th>
                            <th>TCKN</th>
                            <th>Dönem</th>
                            <th>Ay</th>
                            <th>Grup</th>
                            <th>Durum</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"></td>
                            <td>Ahmet Sefa Arşiv</td>
                            <td>11111111111</td>
                            <td>2021</td>
                            <td>Ağustos</td>
                            <td>B</td>
                            <td>Aktif</td>
                            <td><a href="#"><i class="fas fa-user-edit"></i></a> <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

@endsection

@section('meta')

    <title>Kursiyer Listesi</title>

@endsection

@section('css')

@endsection

@section('js')

@endsection
