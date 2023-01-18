<div class="d-flex mb-3 justify-content-between">
    <form class="row w-50" method="GET" action="{{ route('admin.kelas') }}" id="jadwalFilterForm">
        <div class="col-md-6">
            <select name="tingkat" id="tingkat" class="form-select">
                <option value="" selected>--Pilih Tingkat--</option>
                @foreach ($tingkat as $tnk)
                    <option value="{{ $tnk->id }}">{{ $tnk->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <select name="kelas" id="kelas" class="form-select">
                <option value="" selected>--Kelas--</option>
            </select>
        </div>
        <div class="col-md-4">
           <x-input.select-day/>
        </div>
    </form>
    <div class="d-flex justify-content-end gap-2">
        <a class="btn btn-primary rounded rounded-circle" href="{{ route('operator.jadwal.create') }}">
            <i class="fas fa-plus"></i>
        </a>
        <button class="btn btn-success rounded rounded-circle">
            <i class="fas fa-file-excel"></i>
        </button>
        <button class="btn btn-danger rounded rounded-circle">
            <i class="fas fa-file-pdf rounded rounded-circle"></i>
        </button>
        <button class="btn btn-secondary rounded rounded-circle">
            <i class="fas fa-print"></i>
        </button>
    </div>
</div>
