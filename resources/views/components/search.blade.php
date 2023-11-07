<form action="?" method="get" class="form-inline">
  <div class="input-group ml-auto">
    <input type="text" name="search" class="form-control" placeholder="cari..." value="<?= request()->search ?>">

    <div class="input-group-append">
      <button class="btn btn-outline-secondary" type="submit">Go !</button>
    </div>
  </div>
</form>