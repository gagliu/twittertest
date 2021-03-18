<!-- Modal -->
<div class="modal fade" id="create_tweet_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('tweets.store') }}" method="POST" id='form_create_tweet'>
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <div class="form-group">
                                <textarea class="form-control" name="description" id="tweet" rows="3" placeholder="What's happening?"></textarea>
                            </div>
                        </div>
                    </div>
                    @csrf
                </form>
                <div class="modal-footer">
                    <div class="container-fluid">
                        <div class="row justify-content-end">
                            <button type="submit" class="btn btn-primary crud-submit">Tweet</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
