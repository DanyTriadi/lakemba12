@extends('layouts.admin')

@section('title', 'Pesan & Reservasi Pelanggan - Lakemba 12')
@section('page_title', 'Kotak Masuk Pesan Pelanggan')

@section('admin_content')

<div class="space-y-6">
    
    <div class="bg-white rounded-2xl border border-stone-200/80 shadow-sm overflow-hidden">
        @if($messages->isEmpty())
            <div class="p-12 text-center text-stone-400 text-xs">
                Belum ada pesan atau pertanyaan dari formulir kontak.
            </div>
        @else
            <div class="divide-y divide-stone-100">
                @foreach($messages as $msg)
                    <div class="p-6 {{ $msg->is_read ? 'bg-white' : 'bg-brand-50/20' }} hover:bg-stone-50 transition-colors flex flex-col md:flex-row md:items-start justify-between gap-4">
                        <div class="space-y-2 flex-grow">
                            <div class="flex items-center gap-3">
                                <span class="font-bold text-sm text-stone-900">{{ $msg->name }}</span>
                                <span class="text-stone-400 text-xs">&lt;{{ $msg->email }}&gt;</span>
                                @if(!$msg->is_read)
                                    <span class="px-2 py-0.5 bg-brand-500 text-white text-[10px] font-bold rounded-full">Baru</span>
                                @endif
                                <span class="text-[11px] text-stone-400 ml-auto md:ml-0">{{ $msg->created_at->format('d M Y, H:i') }} WIB</span>
                            </div>

                            <div class="flex items-center gap-2">
                                <span class="px-2.5 py-1 bg-stone-100 text-stone-700 font-bold rounded-lg text-xs">
                                    {{ $msg->subject }}
                                </span>
                                @if($msg->phone)
                                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $msg->phone) }}" target="_blank" class="text-xs text-emerald-600 font-bold hover:underline flex items-center gap-1">
                                        <i class="fa-brands fa-whatsapp"></i> {{ $msg->phone }}
                                    </a>
                                @endif
                            </div>

                            <p class="text-xs text-stone-700 leading-relaxed bg-white p-3 rounded-xl border border-stone-200/60 mt-2">
                                {{ $msg->message }}
                            </p>
                        </div>

                        <div class="flex-shrink-0 pt-1">
                            <form method="POST" action="{{ route('admin.messages.toggleRead', $msg->id) }}">
                                @csrf
                                <button type="submit" class="px-3 py-1.5 rounded-xl border border-stone-300 text-xs font-bold text-stone-600 hover:border-brand-500 hover:text-brand-500 transition-colors">
                                    {{ $msg->is_read ? 'Tandai Belum Dibaca' : 'Tandai Sudah Dibaca' }}
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="p-4 border-t border-stone-200">
                {{ $messages->links() }}
            </div>
        @endif
    </div>

</div>

@endsection
