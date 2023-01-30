@if(session()->has('massage'))
<button type="button" class="d-none btn btn-primary" id="liveToastBtn">Show live toast</button>
<!-- 
<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <strong class="me-auto">Massage</strong>
     
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      {{ session('massage') }}.
    </div>
  </div>
</div> -->

<div class="toast-container position-fixed bottom-0 end-0 p-3">
<div id="liveToast" class="toast align-items-center text-bg-dark border-0" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="d-flex">
    <div class="toast-body">
    {{ session('massage') }}
    </div>
    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
</div>
</div>


<script>

const toastLiveExample = document.getElementById('liveToast')
    const toast = new bootstrap.Toast(toastLiveExample)

    toast.show()
 

</script>

@endif