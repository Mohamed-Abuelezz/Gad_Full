<div class="myToast" style="position: fixed; bottom: 20px;right:20px">

  
    <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <strong class="me-auto">تم</strong>
        <small>1s</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body" style="color: green">
        {{ $message != null ? $message  : session()->get('success') }}
      </div>
    </div>
  </div>
