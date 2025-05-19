<div aria-live="polite" aria-atomic="true" class="position-relative" style="min-height: 200px;">
    <div class="toast-container position-fixed bottom-0 end-0 p-3">

        @if(session('success'))
            <div id="successToast" class="toast align-items-center text-bg-success border-0" role="alert"
                aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
            </div>
        @endif

        @if($errors->any())
            <div id="errorToast" class="toast align-items-center text-bg-danger border-0" role="alert"
                aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
            </div>
        @endif

    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var successToastEl = document.getElementById('successToast');
    if (successToastEl) {
        var toast = new bootstrap.Toast(successToastEl);
        toast.show();
    }

    var errorToastEl = document.getElementById('errorToast');
    if (errorToastEl) {
        var toast = new bootstrap.Toast(errorToastEl);
        toast.show();
    }
});
</script>
