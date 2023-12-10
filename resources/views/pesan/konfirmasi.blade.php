@extends('layouts.app')
@section('content')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('home') }}">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12 mt-2">
                <a href="{{ url('check-out') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
            <h2>Checkout</h2>

            <table class="table">
                <tbody>
                    <tr>
                        <td>Nama</td>
                        <td width="10">:</td>
                        <td>
                            <input type="text" name="name" value="{{ $user->name }}" />
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>
                            <input type="email" name="email" value="{{ $user->email }}" />
                        </td>
                    </tr>
                    <tr>
                        <td>No. Hp</td>
                        <td>:</td>
                        <td>
                            <input type="tel" name="no_hp" value="{{ $user->no_hp }}" />
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>
                            <textarea name="alamat">{{ $user->alamat }}</textarea>
                        </td>
                    </tr>
                </tbody>
            </table>
            

            
                {{-- <td>
                    <a href="{{ url('konfirmasi-check-out') }}" class="btn btn-success"
                            onclick="return confirm('Anda yakin check out?')">
                <i class="fa fa-shopping-cart"></i> Check Out
                    </a>
                </td> --}}
            <div class="form-group">
                <label class="font-weight-bold">PROVINSI</label>
                <select class="form-control provinsi-tujuan" name="province_destination">
                    <option value="0">-- pilih provinsi --</option>
                    @foreach ($provinces as $province => $value)
                        <option value="{{ $province  }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="font-weight-bold">KOTA / KABUPATEN</label>
                <select class="form-control kota-tujuan" name="city_destination">
                    <option value="">-- pilih kota --</option>
                </select>
            </div>
            
            <!-- Add some spacing (margin) between the form group and the button -->
            <div style="margin-top: 20px;">
                <a href="{{ url('konfirmasi-check-out') }}" class="btn btn-success"
                    onclick="return confirm('Anda yakin check out?')">
                    <i class="fa fa-shopping-cart"></i> Check Out
                </a>
            </div>
            
        </div>
    </div>
@endsection
