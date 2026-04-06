<x-layouts.app title="Tambah Poli">

    {{-- Header & Back Button --}}
    <div class="flex items-center gap-4 mb-6">
        <a href="{{ route('polis.index') }}" class="text-slate-500 hover:text-slate-800 transition-colors">
            <i class="fas fa-arrow-left text-[1.1rem]"></i>
        </a>
        <h1 class="text-[1.5rem] font-bold text-slate-800 m-0">Tambah Poli</h1>
    </div>

    {{-- Form Container --}}
    <div class="card bg-base-100 shadow-sm border border-slate-200 w-full rounded-2xl">
        <div class="card-body p-6 md:p-8">

            <form action="{{ route('polis.store') }}" method="POST">
                @csrf

                {{-- Input: Nama Poli --}}
                <div class="form-control mb-5">
                    <label class="label pb-2">
                        <span class="text-[0.85rem] font-semibold text-slate-700">
                            Nama Poli <span class="text-red-500">*</span>
                        </span>
                    </label>
                    <input type="text" name="nama_poli" value="{{ old('nama_poli') }}"
                           placeholder="Masukkan nama poli..."
                           class="input input-bordered w-full rounded-[10px] bg-slate-50 border-slate-200 focus:bg-white text-[0.88rem]"
                           required>
                    @error('nama_poli')
                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Input: Keterangan --}}
                <div class="form-control mb-8">
                    <label class="label pb-2">
                        <span class="text-[0.85rem] font-semibold text-slate-700">
                            Keterangan <span class="text-red-500">*</span>
                        </span>
                    </label>
                    <input type="text" name="keterangan" value="{{ old('keterangan') }}"
                           placeholder="Masukkan keterangan poli..."
                           class="input input-bordered w-full rounded-[10px] bg-slate-50 border-slate-200 focus:bg-white text-[0.88rem]">
                    @error('keterangan')
                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Action Buttons --}}
                <div class="flex items-center gap-3">
                    <button type="submit" class="btn bg-[#2d4499] hover:bg-[#1e2d6b] text-white border-none rounded-[10px] px-8 font-semibold">
                        <i class="fas fa-save"></i>
                        Simpan
                    </button>
                    
                    <a href="{{ route('polis.index') }}" class="btn bg-slate-100 hover:bg-slate-200 text-slate-600 border-none rounded-[10px] px-8 font-semibold">
                        Batal
                    </a>
                </div>

            </form>

        </div>
    </div>

</x-layouts.app>