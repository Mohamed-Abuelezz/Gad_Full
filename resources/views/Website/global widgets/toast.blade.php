<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">

<div class="toast align-items-center text-white bg-success border-0" role="alert"
style="" id="myToastEl"
aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body">
        {{ session()->get('success') }}
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div>