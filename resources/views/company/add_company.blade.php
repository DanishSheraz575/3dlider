@extends("layout.template")
@section("content")
    <div class="main-content">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">My Profile</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="card-text">
                                    <p class="card-text">Fields (*) are required</p>
                                </div>
                                <form class="form" id="company_form">
                                    <input type="hidden" name="company_id" value="{{$company ? $company->company_id: 0}}">
                                    @csrf
                                    <div class="form-body">
                                        <h4 class="form-section mt-3"><i class="ft-eye"></i> Company Data</h4>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Country <span class="required">*</span></h5>
                                                    <div class="controls">
                                                        {{get_countries_ddl($company ? $company->country: false)}}
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Department <span class="required">*</span></h5>
                                                    <div class="controls">
                                                        <select name="department" class="form-control" required>
                                                            <option selected disabled>Select Department</option>
                                                            <option {{$company ? ($company->department=='Santa Cruz' ? 'selected' : '' ): ''}} value="Santa Cruz">Santa Cruz</option>
                                                            <option {{$company ? ($company->department=='Peace' ? 'selected' : '' ): ''}} value="Peace">Peace</option>
                                                            <option {{$company ? ($company->department=='Cochabamba' ? 'selected' : '' ): false}} value="Cochabamba">Cochabamba</option>
                                                            <option {{$company ? ($company->department=='Oruro' ? 'selected' : '' ): ''}} value="Oruro">Oruro</option>
                                                            <option {{$company ? ($company->department=='Potosi' ? 'selected' : '' ): ''}} value="Potosi">Potosi</option>
                                                            <option {{$company ? ($company->department=='Beni' ? 'selected' : '' ): ''}} value="Beni">Beni</option>
                                                            <option {{$company ? ($company->department=='Pando' ? 'selected' : '' ): ''}} value="Pando">Pando</option>
                                                            <option {{$company ? ($company->department=='Tarija' ? 'selected' : '' ): ''}} value="Tarija">Tarija</option>
                                                            <option {{$company ? ($company->department=='Chuquisaca' ? 'selected' : '' ): ''}} value="Chuquisaca">Chuquisaca</option>
                                                        </select>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>City <span class="required">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" value="{{$company ? $company->city: ''}}" name="city" class="form-control" required>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <h5>Address <span class="required">*</span></h5>
                                                    <div class="controls">
                                                        <input value="{{$company ? $company->address: ''}}" name="address" type="text" class="form-control" required>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Phone <span class="required">*</span></h5>
                                                    <div class="controls">
                                                        <input value="{{$company ? $company->phone: ''}}" name="phone" type="number" class="form-control" required>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h4 class="form-section mt-3"><i class="ft-mail"></i> Contact information </h4>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <h5>Contact Name <span class="required">*</span></h5>
                                                    <div class="controls">
                                                        <input value="{{$company ? $company->name: ''}}" name="name" type="text" class="form-control" required>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Email Contact <span class="required">*</span></h5>
                                                    <div class="controls">
                                                        <input value="{{$company ? $company->email: ''}}" name="email" type="email" class="form-control" required>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Contact Position <span class="required">*</span></h5>
                                                    <div class="controls">
                                                        <input value="{{$company ? $company->position: ''}}" name="position" type="text" class="form-control" required>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Inspector Email <span class="required">*</span></h5>
                                                    <div class="controls">
                                                        <input value="{{$company ? $company->inspector_email: ''}}" name="inspector_email" type="email" class="form-control" required>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Health insurance fund <span class="required">*</span></h5>
                                                    <div class="controls">
                                                        <select name="fund" class="form-control" required>
                                                            <option selected disabled>Select Department</option>
                                                            <option {{$company ? ($company->fund=='Chuquisaca' ? 'selected' : '' ): ''}} value="Caja Nacional de Salud">Caja Nacional de Salud</option>
                                                            <option {{$company ? ($company->fund=='Caja de la Banca Privada' ? 'selected' : '' ): ''}} value="Caja de la Banca Privada">Caja de la Banca Privad</option>
                                                            <option {{$company ? ($company->fund=='SINEC' ? 'selected' : '' ): ''}} value="SINEC">SINEC</option>
                                                            <option {{$company ? ($company->fund=='Caja Serv. Nal. de Caminos' ? 'selected' : '' ): ''}} value="Caja Serv. Nal. de Caminos">Caja Serv. Nal. de Caminos</option>
                                                            <option {{$company ? ($company->fund=='COSMIL' ? 'selected' : '' ): ''}} value="COSMIL">COSMIL</option>
                                                            <option {{$company ? ($company->fund=='Seguro Universitario' ? 'selected' : '' ): ''}} value="Seguro Universitario">Seguro Universitario</option>
                                                            <option {{$company ? ($company->fund=='Caja de Saguapac' ? 'selected' : '' ): ''}} value="Caja de Saguapac">Caja de Saguapac</option>
                                                            <option {{$company ? ($company->fund=='Caja de Salud CORDES' ? 'selected' : '' ): ''}} value="Caja de Salud CORDES">Caja de Salud CORDES</option>
                                                        </select>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions right">
                                        <button type="submit" class="btn main_btn"> Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("footer-scripts")
    <script>
        $('#company_form').submit(function (e){
            e.preventDefault();
            let data = new FormData($('#company_form')[0]);
            let a = function (){
                window.location.reload();
            }
            let arr = [a];
            call_ajax_with_functions("","{{route('save_company')}}", data, arr);
        });
    </script>
@endsection
