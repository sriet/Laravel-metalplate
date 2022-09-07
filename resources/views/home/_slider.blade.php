<div class="slider-main">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">

            <div class="carousel-item active" style="background-image: url({{ Storage::url($slider->first()->image) }})">
                <div class="carousel-caption d-none d-md-block h-100">
                    <h3>{{ $slider->first()->title }}</h3>
                    <p>{{ $slider->first()->description }}</p>
                </div>
            </div>

            @foreach($slider->skip(1) as $rs)
                <div class="carousel-item" style="background-image: url({{ Storage::url($rs->image) }})">
                    <div class="carousel-caption d-none d-md-block h-100">
                        <h3>{{ $rs->title }}</h3>
                        <p>{{ $rs->description }}</p>
                    </div>
                </div>
            @endforeach

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
