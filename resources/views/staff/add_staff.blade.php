@extends("layout.template")
@section("content")
    <div class="main-content">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12">
                    <div id="step_1" style="display: block">
                        @include('staff.partial.personal_info')
                    </div>
                    <div id="step_2" style="display: none">
                        @include('staff.partial.foreign_data')
                    </div>
                    <div id="step_3" style="display: none">
                        @include('staff.partial.labor_data')
                    </div>
                    <div id="step_4" style="display: none">
                        @include('staff.partial.contract_assign')
                    </div>
                    <div>
                        <input id="staff_id" type="hidden">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("footer-scripts")
    <script>
        // Personal Data FOrm
        $('#personal_form').submit(function (e) {
            e.preventDefault();
            let data = new FormData($('#personal_form')[0]);
            let request =  new XMLHttpRequest();
            request.open("POST", "{{route('personal_form')}}", true);
            request.send(data);
            $('body').append(modal);
            $('#background_fade').fadeIn();
            $('.btn').attr('disabled','disabled');
            request.onreadystatechange = function() {
                if (request.readyState === 4) {
                    $('.btn').removeAttr('disabled');
                    $('#background_fade').fadeOut(function() {
                        $(this).remove();
                    });
                    try {
                        let json = JSON.parse(request.responseText);
                        if(json.status=='Success'){
                            swal("Success", "Saved", "success");
                            $('#staff_id').val(json.result);
                            $('#step_1').hide();
                            if($('#is_foreign').val()=='Yes'){
                                $('#step_2').show();
                            } else {
                                $('#step_3').show();
                            }
                        } else{
                            swal("Failure",json.result, "error");
                        }
                    } catch (e) {
                        swal("Failure","Unexpected Error", "error");
                    }

                }
            }
        });

        // let Foreign Data Form
        $('#foreign_form').submit(function (e) {
            e.preventDefault();
            let data = new FormData($('#foreign_form')[0]);
            data.append('staff_id', $('#staff_id').val());
            let request =  new XMLHttpRequest();
            request.open("POST", "{{route('foreign_form')}}", true);
            request.send(data);
            $('body').append(modal);
            $('#background_fade').fadeIn();
            $('.btn').attr('disabled','disabled');
            request.onreadystatechange = function() {
                if (request.readyState === 4) {
                    $('.btn').removeAttr('disabled');
                    $('#background_fade').fadeOut(function() {
                        $(this).remove();
                    });
                    try {
                        let json = JSON.parse(request.responseText);
                        if(json.status=='Success'){
                            swal("Success", "Saved", "success");
                            $('#staff_id').val(json.result);
                            $('#step_2').hide();
                            $('#step_3').show();
                        } else{
                            swal("Failure",json.result, "error");
                        }
                    } catch (e) {
                        swal("Failure","Unexpected Error", "error");
                    }
                }
            }
        });

        // let labor Data Form
        $('#labor_form').submit(function (e) {
            e.preventDefault();
            let data = new FormData($('#labor_form')[0]);
            data.append('staff_id', $('#staff_id').val());
            let request =  new XMLHttpRequest();
            request.open("POST", "{{route('labor_form')}}", true);
            request.send(data);
            $('body').append(modal);
            $('#background_fade').fadeIn();
            $('.btn').attr('disabled','disabled');
            request.onreadystatechange = function() {
                if (request.readyState === 4) {
                    $('.btn').removeAttr('disabled');
                    $('#background_fade').fadeOut(function() {
                        $(this).remove();
                    });
                    try {
                        let json = JSON.parse(request.responseText);
                        if(json.status=='Success'){
                            swal("Success", "Saved", "success");
                            $('#staff_id').val(json.result);
                            $('#step_3').hide();
                            $('#step_4').show();
                        } else{
                            swal("Failure",json.result, "error");
                        }
                    } catch (e) {
                        swal("Failure","Unexpected Error", "error");
                    }
                }
            }
        });

        //contacts form

    </script>

@endsection
