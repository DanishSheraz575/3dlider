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
            let a = function () {
                if (json.status === "Success") {
                    $('#step_1').remove();
                    $('#step_2').show();
                }
            }
            let arr = [a];
            call_ajax_with_functions("", "{{route('personal_form')}}", data, arr);
        });

        // let Foreign Data Form
        $('#foreign_form').submit(function (e) {
            e.preventDefault();
            let data = new FormData($('#foreign_form')[0]);
            let a = function () {
                if (json.status === "Success") {
                    $('#step_2').remove();
                    $('#step_3').show();
                }
            }
            let arr = [a];
            call_ajax_with_functions("", "{{route('foreign_form')}}", data, arr);
        });


        // let labor Data Form
        $('#labor_form').submit(function (e) {
            e.preventDefault();
            let data = new FormData($('#labor_form')[0]);
            let a = function () {
                if (json.status === "Success") {
                    $('#step_3').remove();
                    $('#step_4').show();
                }
            }
            let arr = [a];
            call_ajax_with_functions("", "{{route('labor_form')}}", data, arr);
        });
    </script>

@endsection
