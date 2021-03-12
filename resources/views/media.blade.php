

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Phototèque</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body row">
            @foreach (getMedia(Auth::user()->group->boutique_id) as $image)
            <div class="col-md-3 p-1">
                <div>
                    <img src="{{themes_path()->url($image)}}" style="width: 100%;height:150px">
                    <button class="mediafile btn btn-secondary w-100 mt-1" data-dismiss="modal" data-path="{{themes_path()->url($image)}}">choisir</button>
                </div>
            </div>
            @endforeach
        </div>
      </div>
    </div>
  </div>
