<div class="col-12 col-md-6 col-lg-3">
    <div class="cardWrapper cardBackgroundPsychic mb-5">
        <h4 class="ms-3">{{$article->title}}</h4>
        <img src="https://picsum.photos/{{400+$article->id}}" alt="">
        <div class="d-flex align-items-center justify-content-between mt-2">
            <h5 class="ms-1">{{$article->category->name}}</h5>
            <h4 class="me-1">{{$article->price}}</h4>
        </div>
        <p class="ms-1">{{$article->description}}</p>
        <div class="d-flex align-items-center justify-content-between mt-2">
            <p>{{Auth::user()->name}}</p>
            <p>Pubblicato il: </p>
        </div>
    </div>
</div>
