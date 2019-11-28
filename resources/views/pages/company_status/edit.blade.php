@extends('layouts.app')

@section('content')
<div class="card">
        <div class="card-header">
            <h4 class="mb-0">CompanyStatus</h4>

        </div>
        <form class="form form-vertical" method="POST" action="{{ route('CompanyStatus.update',$permission->id) }}">
            @csrf
            @method('PUT')
            <div class="card-content">
                <div class="card-body">
               
                                   <div class="form-group row">
                        <label class="control-label col-sm-4 text-right font-weight-bold" for="crud-indirizzo_carico">Name</label>
                        <div class="col-sm-8" id="wrap-indirizzo_carico">
                        <input name="status" type="text" class="form-control input-sm" value="{{$permission->company_status}}"
                                   placeholder="Status">
                        </div>
                    </div>

                    <hr>
                    <div class="form-group row">
                        <label class="control-label col-sm-4 text-right font-weight-bold" for="crud-indirizzo_carico">Color</label>
                        <div class="col-sm-8" id="wrap-indirizzo_carico">
                            <input name="color" type="text" class="form-control input-sm" value="{{$permission->color}}"
                                   placeholder="Color">
                        </div>
                    </div>

                    <hr>


                </div>
            </div>
            <div class="card-footer mb-3">
                <div class="pull-right">

                    <a class="btn btn-warning btn-xs text-white">
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-success btn-xs text-white">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>












@endsection