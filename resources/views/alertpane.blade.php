@if(session('reponse'))
    <div>
        <p class="alert alert-success">
            {{session('reponse')}}
            <span></span>
        </p>
    </div>
@elseif($errors)
    @foreach($errors->all() as $message)
    <div>
       <p class="alert alert-warning">
           {{$message}}
           <span></span>
       </p>
    </div>
    @endforeach
@elseif(session('erreur'))
    <div>
       <p class="alert alert-danger">
           {{session('erreur')}}
           <span></span>
       </p>
    </div>
@endif
