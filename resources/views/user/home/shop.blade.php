@extends('layout.master')

@section('dashboard')
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">registered shop</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="/">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Warung</p>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(function(){
            $(document).on('click','#deleteWarung', function(e){
                e.preventDefault();
                var data_id = $(this).attr("data-id");
                var data_nama = $(this).attr("data-nama");

                Swal.fire({
                    title: 'Apakah kamu Yakin?',
                    text: "Ingin menghapus " + data_nama + " ? " + " Jika dihapus, semua barang milikmu akan terhapus!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus sekarang!'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = "/warung/" + data_id + "/delete",
                        Swal.fire(
                        'Deleted!',
                        data_nama + ' sudah terhapus.',
                        'success'
                        )
                    }
                    })

            });
        });
    </script>
@endpush

@section('content')
    <!-- Categories Start -->
    <div class="container">
        <section id="warung" class="p-4">
            <div class="row">
                @forelse ($warung as $item)
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex mb-4">
                    <div class="card w-100 d-flex flex-column">
                        <img src="{{ asset('fotowarung/' . $item->fotowarung) }}" class="card-img-top object-fit-cover" alt="" style="height: 200px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $item->nama }}</h5>
                            <p class="card-text">{{ $item->alamat }}</p>
                            <div class="d-flex justify-content-between mt-auto">
                                <a href="/warung/{{ $item->id }}" class="btn btn-primary">Enter now</a>
                                @if ($users_id && $item->users_id == $users_id->id)
                                <a class="btn btn-secondary" href="/warung/{{ $item->id }}/edit">Edit</a>
                                <a class="btn btn-danger" href="{{ url('') }}" type="submit" id="deleteWarung" data-id="{{ $item->id }}" data-nama="{{ $item->nama }}">Delete</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <h3 class="section-title px-5"><span class="px-2">Belum ada Toko yang Terdaftar!</span></h3>
                </div>
                @endforelse
            </div>
        </section>
    </div>
    <!-- Categories End -->
@endsection
