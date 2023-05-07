<div class="card">
    <div class="card-header">
        <h4 class="card-title">Add Vehicles</h4>
    </div>
    <div class="card-content">
        <div class="card-body">
            <div class="card-text">
                <p class="card-text">Fields (*) are required</p>
            </div>
            <form class="form" id="vehicle_features">
                @csrf
                <?php
                /** @var $vehicle_data */
                ?>
                <?=$vehicle_data ? "<input type='hidden' name='staff_id' value='".$vehicle_data->vehicle_id."'/>" : ''?>
                <div class="form-body">
                    <h4 class="form-section mt-3"><i class="ft-user"></i>Vehicles Features</h4>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Vehicle Type <span class="required">*</span></h5>
                                        <div class="controls">
                                            <select name="type" class="form-control" required>
                                                <option selected disabled>Select Vehicle Type</option>
                                                <option {{$vehicle_data ? ($vehicle_data->type=='Normal' ? 'selected' : '') : ''}} value="Normal">Normal</option>
                                                <option {{$vehicle_data ? ($vehicle_data->type=='Special' ? 'selected' : '') : ''}} value="Special">Special</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Plate No <span class="required">*</span></h5>
                                        <div class="controls">
                                            <input value="{{$vehicle_data ? $vehicle_data->plate_num: ''}}" type="text" name="plate_num" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Chassis No <span class="required">*</span></h5>
                                        <div class="controls">
                                            <input type="text" value="{{$vehicle_data ? $vehicle_data->chasis_num: ''}}" name="chasis_num" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Ability <span class="required">*</span></h5>
                                        <div class="controls">
                                            <input type="text" value="{{$vehicle_data ? $vehicle_data->ability: ''}}" name="ability" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Year of production <span class="required">*</span></h5>
                                        <div class="controls">
                                            <input type="text" value="{{$vehicle_data ? $vehicle_data->year_of_production: ''}}" name="year_of_production" id="year_picker" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Engine No<span class="required">*</span></h5>
                                        <div class="controls">
                                            <input type="text" value="{{$vehicle_data ? $vehicle_data->engine_num: ''}}" name="engine_num" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Model <span class="required">*</span></h5>
                                        <div class="controls">
                                            <input type="text" value="{{$vehicle_data ? $vehicle_data->model: ''}}" name="model" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Brand <span class="required">*</span></h5>
                                        <div class="controls">
                                            <input type="text" value="{{$vehicle_data ? $vehicle_data->brand: ''}}" name="brand" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Displacement <span class="required">*</span></h5>
                                        <div class="controls">
                                            <input type="text" value="{{$vehicle_data ? $vehicle_data->displacement: ''}}" name="displacement" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Mileage <span class="required">*</span></h5>
                                        <div class="controls">
                                            <input type="text" value="{{$vehicle_data ? $vehicle_data->mileage: ''}}" name="mileage" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Unit Type<span class="required">*</span></h5>
                                        <div class="controls">
                                            <select name="unit_type" class="form-control" required>
                                                <option readonly selected disabled>Select Vehicle Type</option>
                                                <option selected disabled>Select Unit Type</option>
                                                <option {{$vehicle_data ? ($vehicle_data->unit_type=='Otro' ? 'selected' : '') : ''}} value="Otro">(Otro)</option>
                                                <option {{$vehicle_data ? ($vehicle_data->unit_type=='Automovil' ? 'selected' : '') : ''}} value="Automovil">Automovil</option>
                                                <option {{$vehicle_data ? ($vehicle_data->unit_type=='Camion' ? 'selected' : '') : ''}} value="Camion">Camion</option>
                                                <option {{$vehicle_data ? ($vehicle_data->unit_type=='camioneta' ? 'selected' : '') : ''}} value="camioneta">camioneta</option>
                                                <option {{$vehicle_data ? ($vehicle_data->unit_type=='Omnibus/Microom' ? 'selected' : '') : ''}} value="Omnibus/Microomnibus">Omnibus/Microomnibus</option>
                                                <option {{$vehicle_data ? ($vehicle_data->unit_type=='Tanque Acoplado' ? 'selected' : '') : ''}} value="Tanque Acoplado">Tanque Acoplado</option>
                                                <option {{$vehicle_data ? ($vehicle_data->unit_type=='Transporte de Personal' ? 'selected' : '') : ''}} value="Transporte de Personal">Transporte de Personal</option>
                                                <option {{$vehicle_data ? ($vehicle_data->unit_type=='Camion Chasis' ? 'selected' : '') : ''}} value="Camion Chasis">Camion Chasis</option>
                                                <option {{$vehicle_data ? ($vehicle_data->unit_type=='Pluma' ? 'selected' : '') : ''}} value="Pluma">Pluma</option>
                                                <option {{$vehicle_data ? ($vehicle_data->unit_type=='Tracto Camion' ? 'selected' : '') : ''}} value="Tracto Camion">Tracto Camion</option>
                                                {{-- TODO other unit type
                                                <option value="Camion G'inche">Camion G'inche</option>
                      <option value="Camion Tractor">Camion Tractor</option>
                      <option value="Carretån para Transgme">
                        Carretån para Transgme
                      </option>
                      <option value="Cuatriciclo">Cuatriciclo</option>
                      <option value="Motocompres">Motocompres</option>
                      <option value="Retroexcavadora">Retroexcavadora</option>
                      <option value="Semiremolque">Semiremolque</option>
                      <option value="Termofusionador">Termofusionador</option>
                      <option value="Tractor con Cabina">
                        Tractor con Cabina
                      </option>
                      <option value="Aeronaves-HelicÖpteros">
                        Aeronaves-HelicÖpteros
                      </option>
                      <option value="Cargadora">Cargadora</option>
                      <option value="Compactador Autopropulsado">
                        Compactador Autopropulsado
                      </option>
                      <option value="Compactador De">Compactador De</option>
                      <option value="Equipo de Pedoracion">
                        Equipo de Pedoracion
                      </option>
                      <option value="Equipo de Pulling">
                        Equipo de Pulling
                      </option>
                      <option value="Equipo de Terminaciön">
                        Equipo de Terminaciön
                      </option>
                      <option value="Equipo depösito para aire cornprimido">
                        Equipo depösito para aire cornprimido
                      </option>
                      <option value="Equipo motocompresor">
                        Equipo motocompresor
                      </option>
                      <option value="Equipo RTP">Equipo RTP</option>
                      <option value="Excavadora">Excavadora</option>
                      <option value="Grupo Electrågeno">
                        Grupo Electrågeno
                      </option>
                      <option value="Hidroelevador">Hidroelevador</option>
                      <option value="Motoniveladora">Motoniveladora</option>
                      <option value="MO tosoldadora">MO tosoldadora</option>
                      <option value="Retrocargadora">Retrocargadora</option>
                      <option value="Retroexcavadora">Retroexcavadora</option>
                      <option value="Rodillo De Pata De Cabra">
                        Rodillo De Pata De Cabra
                      </option>
                      <option value="Tanque para deposito de GLP">
                        Tanque para deposito de GLP
                      </option>
                      <option value="Tiendetubos">Tiendetubos</option>
                      <option value="Tolba arenadora">Tolba arenadora</option>
                      <option value="Topadora">Topadora</option>
                      <option value="Tractor Agricola">Tractor Agricola</option>
                      <option value="Vibrocompactador">Vibrocompactador</option>
                      <option value="Work Over">Work Over</option>
                      <option value="Slick Line">Slick Line</option>
                      <option value="Grua Hidraulica">Grua Hidraulica</option>
                                                --}}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                <h5><strong>Photo</strong></h5>
                                <div class="pb-3">
                                    <img id="blah" alt="your image" src="{{$vehicle_data ? url('public/images/vehicles/'.$vehicle_data->photo) : url('public/app-assets/img/img.png')}}" width="300" height="300"/>
                                </div>
                                <!--our custom file upload button-->
                                <input hidden id="upload" type="file" name="photo" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                <label class="main_btn " for="upload">Select Image</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-actions right">
                    <button type="submit" class="btn main_btn">Save & Next</button>
                </div>
            </form>

        </div>
    </div>
</div>
