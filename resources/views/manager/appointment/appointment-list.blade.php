@extends('manager.layout.app')

@section('content')

    <div class="container-fluid">
        <section class="content">
            <figure>
                <blockquote class="blockquote">
                    <h2>Randevular</h2>
                </blockquote>
                <figcaption>
                    <span><a href="{{route('manager.appointment-car')}}"><i
                                class="fas fa-car"></i> Araç & Randevular</a> /</span>
                    <span class="active">Randevular</span>
                </figcaption>
            </figure>
            <div class="row">
                <div class="col-12 col-lg-12 mt-3">
                    <h4><a href="{{route('manager.appointment.create')}}" class="btn btn-success">Randevu Oluştur</a>
                    </h4>
                </div>
                <div class="col-12 col-lg-12 mt-3">
                    <table id="example" class="table">
                        <thead>
                        <tr>
                            <th scope="col">Kursiyer</th>
                            <th scope="col">Eğitmen</th>
                            <th scope="col">Araç</th>
                            <th scope="col">Tarih/Saat</th>
                            <th scope="col">Durum</th>
                            <th scope="col">İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($appointments as $appointment)
                            <tr>
                                <th scope="row">{{$appointment->user->name .' '. $appointment->user->surname}}</th>
                                <td>{{$appointment->teacher->name .' '. $appointment->teacher->surname}}</td>
                                <td>{{$appointment->car->plate_code}}</td>
                                <td>{{$appointment->date}}</td>
                                <td class="{{$appointment->status === 1 ? 'text-success' : 'text-danger'}} fw-bold">{{$appointment->status === 1 ? 'Aktif' : 'Pasif'}}</td>
                                <td>
                                    <a href="{{route('manager.appointment.edit',$appointment)}}"><i
                                            class="fas fa-edit"></i></a>
                                    <button class="btn"
                                            onclick="deleteButton(this,`${{route('manager.appointment.destroy',$appointment)}}`)">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

@endsection

@section('meta')

    <title>Randevular</title>

@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('/plugins/toastr/toastr.min.css')}}">
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{asset('/plugins/toastr/toastr.min.js')}}"></script>
    <script src="{{asset('/plugins/toastr/custom-toastr.js')}}"></script>
    <script>
        const backUrl = '{{route('manager.appointment.index')}}';
    </script>
    <script src="{{asset('js/post.js')}}"></script>
@endsection
