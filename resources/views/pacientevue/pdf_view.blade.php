<div class="content"> 

    <h2 class="text-center mb-3">Laravel HTML to PDF PACIENTE</h2> 
    
    <div class="d-flex justify-content-end mb-4"> 
    
    <a class="btn btn-primary" href="{{ URL::to('#') }}">ExportADO CORRECTAMENTE to PDF</a> 
    
    </div> 
    
    <table class="table table-bordered mb-5"> 
    
    <thead> 
    
    <tr class="table-danger"> 
    
    <th scope="col">#</th> 
    
    <th scope="col">dni</th> 
    
    <th scope="col">Apellidos y Nombres</th> 
    
     
     
    
    </tr> 
    
    </thead> 
    
    <tbody> 
    
    @foreach($paciente ?? '' as $data) 
    
    <tr> 
    
    <th scope="row">{{ $data->idpaciente }}</th> 
    
    <td>{{ $data->dni }}</td> 
    
    <td>{{ $data->ape_nom }}</td> 
    
    </tr> 
    
    @endforeach 
    
    </tbody> 
    
    </table> 
    
    </div> 