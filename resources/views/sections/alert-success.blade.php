@if (Session::has('success'))

        @push('scriptsFooter')
        <script>
            $.confirm({
                title: '',
                icon: 'fa-solid fa-heart',
                type: 'blue',
                theme: 'modern',
                content: "{!! Session::get('success') !!}",
                buttons: {
                    gracias: {
                        btnClass: 'btn-blue',
                        isHidden: false,
                        isDisabled: false,
                        keys: ['enter'],
                        action: function(heyThereButton){
                            
                        }
                    }
                }
            });
        </script>
        @endpush

    @endif