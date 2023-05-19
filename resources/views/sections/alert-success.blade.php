@if (Session::has('success'))

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"><i class="fa-solid fa-check text-success"></i></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {!! Session::get('success') !!}
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Comprendido</button>
                </div>
            </div>
            </div>
        </div>
        @push('scriptsFooter')
        <script>
            var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'))
            myModal.show()
        </script>
        @endpush

    @endif