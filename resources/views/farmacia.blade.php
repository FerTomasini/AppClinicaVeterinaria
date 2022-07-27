@extends('templates/layout')

@section('titulo', 'Farmácia Veterinária')

@section('corpo')
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome do Medicamento</th>
      <th scope="col">Tipo</th>
      <th scope="col">Valor</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Dipirona</td>
      <td>Analgésico</td>
      <td>R$12,00</td>
      <td><button type="button" class="btn btn-success">Comprar</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Bravecto 10 a 20kgs - (500mg) Msd</td>
      <td>Anti Pulgas E Carrapato</td>
      <td>R$251,86</td>
      <td><button type="button" class="btn btn-success">Comprar</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Ciurex Fagra – 4 comprimidos</td>
      <td>Vermicida para Cães e Gatos</td>
      <td>R$12,50</td>
      <td><button type="button" class="btn btn-success">Comprar</button></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Coleira Scalibor - Grande 65 Cm - Msd</td>
      <td>Antipulga E Carrapato</td>
      <td>R$101,98</td>
      <td><button type="button" class="btn btn-success">Comprar</button></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Petzi Plus 10 Kg - 800 Gr.</td>
      <td>Vermicida para Cães</td>
      <td>R$42,93</td>
      <td><button type="button" class="btn btn-success">Comprar</button></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Dermotrat Aerosol - Ourofino</td>
      <td>Antibacteriano, antifúngico e anti-inflamatório</td>
      <td>R$97,31</td>
      <td><button type="button" class="btn btn-success">Comprar</button></td>
    </tr>
  </tbody>
</table>

<h4>Valor total dos produtos selecionados</h4>

    <h5>R$ {{ number_format($medicamento->preco, 2) }}</h5>
@endsection