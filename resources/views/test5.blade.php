@extends("layouts.main")

@section("title", "hello")

@section('content')
    <div id="view-modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content"> 
                <div class="modal-header">
                    <h4 class="modal-title">User Profile</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <div id="modal-loader" style="display: none; text-align: center;">loading...</div>
                    <div id="dynamic-content"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <button data-toggle="modal" data-target="#view-modal" id="getUser" class="btn btn-sm btn-info" data-url="{{ route('dynamicModal', ['id'=>$id])}}">Submit</button>

    <script>
        $(document).ready(function() {
            $(document).on('click', '#getUser', function(e) {
                e.preventDefault();

                var url = $(this).data('url');
                $('#dynamic-content').html(''); // leave it blank before ajax call
                $('#modal-loader').show();      // load ajax loader

                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'html'
                }).done(function(data) {
                    console.log(data);
                    
                    $('#dynamic-content').html('');
                    $('#dynamic-content').html(data); // load response 
                    $('#modal-loader').hide();        // hide ajax loader
                }).fail(function() {
                    $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
                    $('#modal-loader').hide();
                });
            });
        });
    </script>
@endsection