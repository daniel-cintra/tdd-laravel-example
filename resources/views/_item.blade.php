<div class="col-md-4">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/img/{{$item->img_src}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$item->title}}</h5>
            <p class="card-text">{{str_limit($item->description, 50)}}</p>
        </div>
    </div>
</div>
