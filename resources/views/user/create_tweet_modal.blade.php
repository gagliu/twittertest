<div class="modal fade" tabindex="-1" id="create_tweet_modal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('tweets.store') }}" method="POST" id='form_create_tweet'>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="form-group">
                        <textarea class="form-control" name="description" id="tweet" rows="3" placeholder="What's happening?" required></textarea>
                    </div>
                </div>
            </div>
            @csrf
        </form>
      </div>
        <div class="modal-footer">
            <div class="container-fluid">
                <div class="row justify-content-end">
                    <button type="submit" class="btn btn-primary tweet-store">Tweet</button>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
