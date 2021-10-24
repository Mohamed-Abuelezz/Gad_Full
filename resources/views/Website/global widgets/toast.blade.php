<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">

<div class="toast align-items-center text-white  {{ session()->get('success') != null ?  'bg-success' :  'bg-danger' }}  border-0" role="alert"
style="" id="myToastEl"
aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body">
        {{ session()->get('success') != null ?  session()->get('success') :  session()->get('error') }}
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div>