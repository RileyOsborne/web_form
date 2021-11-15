<!DOCTYPE html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="index.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="index.js"></script>
</head>
<body class="bg-light">
  <div class="container mb-5">

    <div class="row">
      <div class="p-2 col-12 d-flex flex-column justify-content-center align-items-center">
        <img class="m-3" src="logo.jpg">
        <h2 class="font-weight-bold m-2">Add invoice details</h2>
        <h6 class="text-muted m-2">Rentgroove will generate the invoices automatically</h6>
      </div>
    </div>

      <form id="charge-form" name="charge-form" role="form" method="POST" class="p-2 col-12 bg-white card shadow row d-flex justify-content-center align-items-center">

        <div class="m-1 row col-10">
          <h6 class="text-muted">Type</h6>
          <div class="btn-group" role="group">
            <input type="radio" class="btn-check" name="charge-type" id="recurring" value="recurring" autocomplete="off" <?= $chargeType == "recurring" ? "checked" : ""?>>
            <label class="btn btn-outline-primary shadow-none" for="recurring">Recurring charge</label>

            <input type="radio" class="btn-check" name="charge-type" id="one-time" value="one-time" autocomplete="off" <?= $chargeType == "one-time" ? "checked" : ""?>>
            <label class="btn btn-outline-primary shadow-none" for="one-time">One-time charge</label>
            
          </div>
        </div>

        <div class="m-2 row col-10">
          <h6 class="text-muted">Charge title</h6>
          <div class="input-group" role="group">
            <input type="text" class="form-control" id="charge-title" name="charge-title" placeholder="<?= $chargeTitle; ?>">
          </div>
        </div>

        <div class="m-2 row col-10">
          <h6 class="text-muted">Charge description</h6>
          <div class="input-group" role="group">
            <textarea class="form-control" id="charge-description" name="charge-description" rows="3" placeholder="<?= $chargeDescription ?>"></textarea>
          </div>
        </div>

        <div class="m-2 row col-10">
          <h6 class="text-muted">Charge amount</h6>
          <div class="input-group" role="group">
            <span class="input-group-text">$</span>
            <input type="text" class="form-control" id="charge-amount" name="charge-amount" placeholder="<?= $chargeAmount ?>">
          </div>
        </div>

        <div class="m-2 row col-10">
          <h6 class="text-muted">Revenue category</h6>
          <div class="input-group" role="group">
            <select class="form-select text-muted" name="charge-category">
              <option value="1" <?= $chargeCategory == 1 ? "selected" : ""?> >Rent revenue</option>
              <option value="2" <?= $chargeCategory == 2 ? "selected" : ""?> >Repairs revenue</option>
            </select>
          </div>
        </div>

        <div class="m-2 row col-10">
          <h6 class="text-muted">Active date</h6>
          <div class="input-group" role="group">
            <input type="date" class="form-control text-muted" id="active-date" name="active-date" value="<?= $activeDate ?>">
            <h2 class="text-muted"> - </h2>
            <input type="date" class="form-control text-muted" id="due-date" name="due-date" value="<?= $dueDate ?>">
          </div>
        </div>

        <div class="m-1 row col-10">
          <h6 class="text-muted">Early payment discount</h6>
          <div class="btn-group" role="group">
            <input type="radio" class="btn-check" name="early-payment" id="early-no" value="early-no" autocomplete="off" <?= $earlyPayment == "early-no" ? "checked" : ""?>>
            <label class="btn btn-outline-primary shadow-none" for="early-no">No</label>

            <input type="radio" class="btn-check" name="early-payment" id="early-yes" value="early-yes" autocomplete="off" <?= $earlyPayment == "early-yes" ? "checked" : ""?>>
            <label class="btn btn-outline-primary shadow-none" for="early-yes">Yes</label>
          </div>
        </div>

        <div class="m-2 row col-10">
          <div class="input-group" role="group">
            <span class="input-group-text">$</span>
            <input type="number" class="form-control" id="paid-in-full-amount" name="paid-in-full-amount" placeholder="<?= $paidInFullAmount ?>">
              <div class="text-muted mx-2 d-flex justify-content-center align-items-center">if paid in full by</div>
            <input type="number" class="form-control" id="paid-in-full-days" name="paid-in-full-days" placeholder="<?= $paidInFullDays ?>" style="max-width: 4rem;">
            <span class="input-group-text">days before date</span>
          </div>
        </div>

        <div class="m-1 row col-10">
          <h6 class="text-muted">Late fee</h6>
          <div class="btn-group" role="group">
            <input type="radio" class="btn-check" name="late-fee" id="late-no" value="late-no" autocomplete="off"<?= $lateFee == "late-no" ? "checked" : ""?>>
            <label class="btn btn-outline-primary shadow-none" for="late-no">No</label>

            <input type="radio" class="btn-check" name="late-fee" id="late-yes" value="late-yes" autocomplete="off"<?= $lateFee == "late-yes" ? "checked" : ""?>>
            <label class="btn btn-outline-primary shadow-none" for="late-yes">Yes</label>
          </div>
        </div>

        <div class="m-2 row col-10">
          <div class="input-group" role="group">
            <span class="input-group-text">$</span>
            <input type="number" class="form-control" id="paid-after-amount" name="paid-after-amount" placeholder="<?= $paidAfterAmount ?>">

            <div class="text-muted mx-2 d-flex justify-content-center align-items-center">if paid after</div>

            <input type="number" class="form-control" id="paid-after-days" name="paid-after-days" placeholder="<?= $paidAfterDays ?>" style="max-width: 4rem;">
            <span class="input-group-text">days or more late</span>
          </div>
        </div>

        <div class="m-1 row col-10">
          <div class="p-3 d-flex justify-content-center">
            <button class="btn btn-outline-secondary btn-lg btn-block mx-5" style="min-width: 11rem;">Go back</button>
            <button class="btn btn-outline-success shadow-none btn-lg btn-block mx-5" id="save" style="min-width: 11rem;">Save & Apply</button>
          </div>
        </div>

    </form> <!-- end card -->

    <div class="p-2 m-2 col-12 d-flex flex-column justify-content-center align-items-center">
      <a href="#">Skip for now</a>
    </div>

  </div> <!-- end container -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>