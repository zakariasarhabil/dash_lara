<h2>Ajouter Client</h2>
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" class="form-control" placeholder="name" id="name" value="{{ old ('name', $client->name  ??null) }}">
    </div>
  </div>
  <!--  col-md-6   -->

  <div class="col-md-6">
    <div class="form-group">
      <label for="email">email</label>
      <input type="email" name="email" class="form-control" placeholder="email" id="email" value="{{ old ('email', $client->email ??null) }}">
    </div>
  </div>
  <!--  col-md-6   -->
</div>


<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label for="montant">montant</label>
      <input type="number" name="montant" class="form-control" placeholder="montant" id="montant" value="{{ old ('montant', $client->montant ??null) }}">
    </div>


  </div>
  <!--  col-md-6   -->

  <div class="col-md-6">

    <div class="form-group">
      <label for="description">description</label>
      <input type="text" class="form-control" id="description" name="description" placeholder="description" value="{{ old ('description', $client->description ??null) }}">
    </div>
  </div>
  <!--  col-md-6   -->
</div>
<!--  row   -->


<div class="row">
  <div class="col-md-6">

    <div class="form-group">
      <label for="debtor">debtor</label>
      <input type="text" class="form-control" name="debtor" id="debtor" placeholder="debtor" value="{{ old ('debtor', $client->debtor ??null) }}">
    </div>
  </div>
  <!--  col-md-6   -->

  <div class="col-md-6">
    <div class="form-group">
      <label for="creditor">creditor</label>
      <input type="number" class="form-control" name="creditor" id="creditor" placeholder="creditor" value="{{ old ('creditor', $client->creditor ??null) }}">
    </div>

  </div>
  <!--  col-md-6   -->
</div>
<!--  row   -->
<div class="form-group">
  <label class="col-md-3 control-label" for="statut">statut</label>
  <div class="col-md-9">
    <select id="statut" name="statut" class="form-control">
      <option selected>Choose...</option>
      <option value="1">Option one</option>
      <option value="2">Option two</option>
    </select>
  </div>
</div>


@if($errors->any())
<ul>
      @foreach ($errors->all() as $error)

      <li>
          {{ $error }}
      </li>
      @endforeach
</ul>

@endif

