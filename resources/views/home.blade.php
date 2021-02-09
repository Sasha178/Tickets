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
                                                    <option value="из A в B">Выбор направления</option>
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
                                                <select name="time" id="time3" class="custom-select col-md-4">
                                                    <option value="#">Выбрать количество</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="3">5</option>
                                                    <option value="4">6</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12 m-2">
                                            <div class="d-flex justify-content-around">
                                                <h5>Время в дороге: <span>11:12</span></h5>
                                                <h5>Стоимость:<span>700 p</span></h5>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary"> Оформить заявку</button>
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
