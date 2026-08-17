@extends("user.layout")
@section("content")

    <div class="content">
        <div class="wrap">
            <div class="content-top">
                <div class="listview_1_of_3 images_1_of_3">
                    <h3>Upcoming Movies</h3>
                    <div class="content-left">
                        <div class="listimg listimg_1_of_2">
                            <img src="{{ asset('admin/' . $n->attachment) }}">
                        </div>
                        <div class="text list_1_of_2">
                            <div class="extra-wrap">
                                <span style="text-color:#000" class="data"><strong>{{ $n->name }}</strong><br>
                                <span style="text-color:#000" class="data"><strong>{{ $n->name }}</strong><br>
                                <div class="data">Release Date : {{ $n->newgs_date }}</div>
                                <span class="text-top">{{ $n->description }}</span>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="listview_1_of_3 images_1_of_3">
                    <h3>Trending Trailers</h3>
                    <div class="middle-list">
                        <div class="listimg1">
                            <a target="_blank" href="{{ $nm->video_url }}"></a>
                            <a target="_blank" href="{{ $nm->video_url }}" class="link" {{ $nm->movie_name }}></a>                                                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection