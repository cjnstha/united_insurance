@extends('layouts.frontend.master')
@section('extra_css')
<link rel="stylesheet" href="{{ asset('asset/css/slick.css') }}">
@endsection
@section('contents')
   @php if(!empty($data['pop_up'][0])) { @endphp
    <div class="homeModal">
        <div class="modal fade" id="popupModal" tabindex="-1" role="dialog" aria-labelledby="popupModalLabel"
            aria-hidden="true">
            @if(\App::getlocale() == 'en')
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="{{ route('pop-up-details', $data['pop_up'][0]->slug) }}">
                            <h5 class="modal-title" id="popupModalLabel">{{ $data['pop_up'][0]->title }}</h5>
                        </a>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <a href="{{ route('pop-up-details', $data['pop_up'][0]->slug) }}"><img
                                src="{{ asset($data['pop_up'][0]->image) }}" alt=""></a>
                    </div>
                </div>
            </div>

            @else

            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="{{ route('pop-up-details', $data['pop_up'][0]->slug) }}">
                            <h5 class="modal-title" id="popupModalLabel">{{ $data['pop_up'][0]->title_np }}</h5>
                        </a>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <a href="{{ route('pop-up-details', $data['pop_up'][0]->slug) }}"><img
                                src="{{ asset($data['pop_up'][0]->image) }}" alt=""></a>
                    </div>
                </div>
            </div>

            @endif

        </div>
@php } @endphp

@endsection
@section('scripts')
<script src="{{ asset('asset/js/slick.min.js') }}" defer></script>
@endsection
