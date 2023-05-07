@extends("layout.template")
@section("content")
    <div class="main-content">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12">
                    <div id="step_1" style="display: block">
                        @include('vehicles.partial.vehicle_features')
                    </div>
                    <div id="step_2" style="display: none">
                        @include('vehicles.partial.technical_inspection')
                    </div>
                    <div id="step_3" style="display: none">
                        @include('vehicles.partial.assign_contract_vehicle')
                    </div>
                    <div>
                        <input id="vehicle_id" type="hidden">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("footer-scripts")
    <script>
        $("#year_picker").datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years",
            autoclose:true //to close picker once year is selected
        });
        // vehicle_features
        $('#vehicle_features').submit(function (e) {
            e.preventDefault();
            let data = new FormData($('#vehicle_features')[0]);
            let request =  new XMLHttpRequest();
            request.open("POST", "{{route('vehicle_features')}}", true);
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
                            $('#vehicle_id').val(json.result);
                            $('#step_1').hide();
                            $('#step_2').show();
                        } else{
                            swal("Failure",json.result, "error");
                        }
                    } catch (e) {
                        swal("Failure","Unexpected Error", "error");
                    }

                }
            }
        });

        // technical_inspection
        $('#technical_inspection').submit(function (e) {
            e.preventDefault();
            let data = new FormData($('#technical_inspection')[0]);
            let a = function () {
                if (json.status === "Success") {
                    $('#step_2').remove();
                    $('#step_3').show();
                }
            }
            let arr = [a];
            call_ajax_with_functions("", "{{route('technical_inspection')}}", data, arr);
        });
    </script>

@endsection
