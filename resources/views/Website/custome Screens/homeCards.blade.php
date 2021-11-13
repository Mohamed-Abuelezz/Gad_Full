<div class="row  justify-content-around">

    @foreach ($profiles as $item)

        <div class="col-12 col-md-5 col-lg-4">
            <div class="container wow animate__jackInTheBox">
                <div class="cover-photo">
                    <img src="{{ asset('storage/images/users_images/' . $item->user->image) }}"
                        class="profile animate__animated animate__pulse animate__infinite">
                </div>
                <div class="profile-name text-medium" style="color: white;">{{ $item->display_name }}
                </div>
                <div class="profile-rate" style="color: white;">
                    <div class="stars">
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i < $item->profileRates->avg('rate'))
                                <span class="fas fa-star checked"></span>

                            @else
                                <span class="fas fa-star"></span>

                            @endif
                        @endfor
                    </div>
                    <div> {{ count($item->profileRates) }} </div>
                </div>
                <p class="about text-small" style="color: white;"> {{ $item->bio }}</p>
                <a class="btn-outline" href="./profile.html"
                    style="width: 80%;">{{ Config::get('app.locale') == 'ar' ? 'المزيد' : 'More' }}</a>
                <div>
                    <i class="fas fa-share-alt"></i>
                    <i class="fab fa-whatsapp"></i>
                    <i class="fas fa-heart"></i>
                </div>
            </div>
        </div>



    @endforeach




</div>

<br>
<br>

<div style="margin: auto; display: flex;justify-content: center" style="color: var(--primary)">
    {{ $profiles->links('Website.global widgets.pagination') }}

</div>
