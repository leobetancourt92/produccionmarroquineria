@extends('plantilla.estructura')
@section('content')
<div class="row">        
    <div class="col-md-12">
        <div class="box box-danger">
            <div class="box-header with-border">
                <i class="fa fa-plus"></i>
                <h3 class="box-title">Crear Talla</h3>   
            </div>
            <div class="box-body table-responsive no-padding">
                <div class="alert text-info" role="alert">
                    <i class="glyphicon glyphicon-info-sign"> </i>
                    A continuaci&oacute;n podr&aacute; crear una talla
                </div>
                <form method="POST" action="{{url("talla/crear")}}">
                    
                    <input type="text" name="" />
                    <input type="submit" name="" />
                </form>    
                
            </div>
        </div>
    </div>
</div>

@endsection
