@extends('dashboard.layout')
@section('contenue')
    <div>

        <form id="form" action="{{url('dashboard/upload_theme')}}" method="POST"  name="form" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Choisissez l'archive du theme</label>
                <input hidden value="{{Auth::user()->boutique->id}}" name="boutique">
                <input type="file" id="zip" accept="application/zip" name="theme" class="form-control mt-2">
                <button  type="submit" id="sub" class="btn btn-warning mt-2">Charger</button>
            </div>
        </form>
    </div>
@endsection
@section('script')

@endsection
