<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeIgniter Contact Form Example</title>
    <!--load bootstrap css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">

    <style>
        .container{
            padding:5%;
        }
        .modal .modal-body{
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 57px 0px 57px 0px;
        }
        .modal .modal-title{
            text-align:center;
        }
        .custom-file-control{
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            z-index: 5;
            height: 2.5rem;
            padding: .5rem 1rem;
            line-height: 1.5;
            color: #555;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: .25rem;
        }
        .custom-file-control::before{
            content:"Browse";
            position: absolute;
            top: -1px;
            right: -1px;
            bottom: -1px;
            z-index: 6;
            display: block;
            height: 2.5rem;
            padding: .5rem 1rem;
            line-height: 1.5;
            color: #555;
            background-color: #eee;
            border: 1px solid #ddd;
            border-radius: 0 .25rem .25rem 0;
        }
        .custom-file-control::after{
            content:attr(data-attr);
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>var base_url = "<?=base_url();?>";</script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                    Import
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <table class="table table-striped col-sm-12">
                    <thead>
                        <tr>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Email</td>
                            <td>Gender</td>
                            <td>Address</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach((array)$students as $student): ?>
                            <tr>
                                <td><?= $student['first_name']?></td>
                                <td><?= $student['last_name']?></td>
                                <td><?= $student['email']?></td>
                                <td><?= $student['gender']?></td>
                                <td><?= $student['address']?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="#" id="import-form">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title text-center" id="myModalLabel">Import CSV File to DB</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="custom-file col-xs-12">
                                <input type="file" id="file" class="custom-file-input" name="file" placeholder="Choose file">
                                <span class="custom-file-control" data-attr="Choose file..."></span>
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-outline-success float-xs-right" data-loading="processing...">Import to DB</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script><!-- Tether for Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
    <script>
        $(function(){
            $('input[name="file"]').on('change',function(e){
                var filename = document.getElementById("file").files[0].name;
                $(this).next().attr('data-attr',filename);
            })
            $('#import-form').on('submit',function(e){
                e.preventDefault();
                var $btn = $(this).find('button[type="submit"]');
                var formdata = new FormData(this);
                $.ajax({
                    url: base_url+'students/import',
                    type: 'POST',
                    dataType: 'JSON',
                    data:formdata,
                    cache:false,
                    contentType: false,
                    processData: false,
                    beforeSend:function(){
                        $btn.button('loading');
                    },
                    success:function(response){
                        $('.form-group.has-error').removeClass('has-error').find('span.text-danger').remove();
                        switch(response.status){
                            case 'form-incomplete':
                                $.each(response.errors, function(key,val){
                                    if(val.error!=''){
                                        $(val.field).closest('.form-group').addClass('has-error').append(val.error);
                                    }
                                })
                            break;
                            case 'success':
                                window.location.reload(true);
                            break;
                            case 'error':
                                console.log(response.message);
                            break;
                        }
                    },
                    error: function(jqXHR,textStatus,error){
                        console.log('Unable to send request!');
                    }
                }).always(function(){
                    $btn.button('reset');
                });
            })
        })
    </script>
</body>
</html>