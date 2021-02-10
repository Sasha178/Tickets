@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Заказ билетов на теплоход') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="container">
                            <div class="card">
                                <div class="card-body ">
                                    <div class="card-title">
                                        <div class="col-md-12 m-2">
                                            <div class="d-flex justify-content-between">
                                                <h5>Выбор направления:</h5>
                                                <select name="route" id="route" class="custom-select col-md-4">
                                                    <option value="Направления">Направления</option>
                                                    <option value="из A в B">из A в B</option>
                                                    <option value="из B в A">из B в A</option>
                                                    <option value="из A в B и обратно в А">из A в B и обратно в А
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12 m-2">
                                            <div class="d-flex justify-content-between">
                                                <label for="time"><h5>Выберите время</h5></label>
                                                <select name="time" id="time" class="custom-select col-md-4">
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-md-12 m-2">
                                            <div class="d-flex justify-content-between">
                                                <label for="time"><h5>Купить билет:</h5></label>
                                                <h4 class="d-inline-flex justify-content-around">
                                                    <span class="d-flex align-items-center">-</span>
                                                    <input type="text" class="form-control col-md-6"
                                                    placeholder="0">
                                                    <span class="d-flex align-items-center">+</span>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="col-md-12 m-2">
                                            <div class="d-flex justify-content-around">
                                                <h5>Время в дороге: <span id="travelTime"> </span></h5>
                                                <h5>Стоимость:<span id="price"></span></h5>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary">Посчитать</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
