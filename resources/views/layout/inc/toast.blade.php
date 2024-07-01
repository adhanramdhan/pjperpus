<!-- Toast Element for Success -->
{{-- @include('layout.inc.css') --}}

<div
    id="actionToast"
    class="bs-toast toast fade bg-success position-fixed top-0 end-0 m-3"
    role="alert"
    aria-live="assertive"
    aria-atomic="true"
    style="display: none;"
>
    <div class="toast-header">
        <i class="bx bx-bell me-2"></i>
        <div class="me-auto fw-semibold">Action anda berhasil</div>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
        {{ session('success') }}
    </div>
</div>

<!-- Toast Element for Error -->
<div
    id="actionToast1"
    class="bs-toast toast fade bg-danger position-fixed top-0 end-0 m-3"
    role="alert"
    aria-live="assertive"
    aria-atomic="true"
    style="display: none;"
>
    <div class="toast-header">
        <i class="bx bx-bell me-2"></i>
        <div class="me-auto fw-semibold">Terjadi Kesalahan</div>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
        {{ session('error') }}
    </div>
</div>

<!-- Tambahkan JS Bootstrap lokal -->
<script>
 document.addEventListener('DOMContentLoaded', function () {
     @if (session('success'))
         var toastEl = document.getElementById('actionToast');
         var toast = new bootstrap.Toast(toastEl);
         toastEl.style.display = 'block';
         toast.show();
     @endif
 });

 document.addEventListener('DOMContentLoaded', function () {
     @if (session('error'))
         var toastEl = document.getElementById('actionToast1');
         var toast = new bootstrap.Toast(toastEl);
         toastEl.style.display = 'block';
         toast.show();
     @endif
 });
</script>
