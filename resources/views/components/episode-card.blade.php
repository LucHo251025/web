@props(['episode' => null])
<div class="swiper-slide max-md:!w-[28%] max-sm:!w-[43%]" style="width: calc(19% - 20px)">
    <a href="javascript:void(0);">
        <div style="width: 100%;position: relative;">
            <img src="{{ $episode->image }}" style="width: 100%;border-radius: 8px;"
                 alt="{{ $episode->title . 'image' }}">
            <div class="film-diff">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class=" film-icon" width="50" height="50">
                    <polygon points="16,8 56,32 16,56" fill="white"/>
                </svg>
            </div>
        </div>
        <h3 class="font-medium text-[14px] text-white mt-1.5 mb-3 overflow-hidden" style="text-overflow: ellipsis;display: -webkit-box; line-clamp: 1; -webkit-line-clamp: 1; -webkit-box-orient: vertical;">Episode {{ $episode->episode_number }}: {{ $episode->title }}</h3>
    </a>
</div>