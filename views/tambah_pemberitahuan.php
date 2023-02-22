<div class="col-sm-4">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Pemberitahuan CRO</h4>
      </div>
      <div class="card-body">
        <form action="index.php?page=dashboard.php" method="post">
          <textarea name="cro[]" id="cro[]" cols="50" rows="10"></textarea>
          <button type="submit" class="btn btn-sm btn-success" name="croBtn">Post</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include '../template/footer.php'; ?>