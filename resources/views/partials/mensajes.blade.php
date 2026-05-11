
@if (session('success_message'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: "¡Excelente!",
                text: "{{ session('success_message') }}",
                icon: "success",
                confirmButtonColor: "#f37021" {{-- El naranja de Tienda OGA --}}
            });
        });
    </script>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif