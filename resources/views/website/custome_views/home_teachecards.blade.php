<div class="cards-container wrapContent">

  <div class="container-fluid">
      <div class="row justify-content-around">

 
@if ($profilesOffersSubscribers->isEmpty())
  
<div class="conentEmpety" style="height: 100vh;position:relative;">

  <div style=
  "position:absolute;
  left:50%;
  font-size: 20px;
  transform: translateX(-50%);
  -webkit-transform: translateX(-50%);"
  >{{ __('website_screens/homescreen.noData') }}  😭</div>

</div>


@else
  


          @foreach ($profilesOffersSubscribers as $profilesOffersSubscriber)
                     

          <div class="col-lg-4 col-12">
              <div class='square'>
                  <div class="card-headerr">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-6">
                                  <img src="{{asset('storage/users_images/'.$profilesOffersSubscriber->profiles->user->image) }}"/>
                              </div>
                           
                              <div class="col-6">
                                  <p class="s6">{{$profilesOffersSubscriber->profiles->display_name}}</p>
                                  <span class="s6">{{Config::get('app.locale') == 'ar' ?  $profilesOffersSubscriber->profiles->subscribersType->title_ar  : $profilesOffersSubscriber->profiles->subscribersType->title_en}}</span>

                                  <div class="stars">

                                    @php

                                    @endphp
       

                      @for ($i = 0; $i < 5; $i++)

                     @if ($i < $profilesOffersSubscriber->profiles->profileRates->avg('rate'))

                      <span class="fas fa-star checked"></span>

                      @else

                      <span class="fas fa-star"></span>

                     @endif

                        @endfor
                                   {{count($profilesOffersSubscriber->profiles->profileRates)}}
                                      
                                  </div>
                                 
                              </div>
                              
                          </div>
                      </div>

                  
                  </div>
                  <hr style="margin-bottom: 0">

                              <div class="card-contentt">


                                  <ul class="nav nav-tabs" id="myTab" role="tablist" style="display: flex;justify-content: space-between">
                                      <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab_{{$loop->index}}" data-bs-toggle="tab" data-bs-target="#home_{{$loop->index}}" type="button" role="tab" aria-controls="home_{{$loop->index}}" aria-selected="true">{{ __('website_screens/homescreen.biography') }}</button>
                                      </li>
                                      <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab_{{$loop->index}}" data-bs-toggle="tab" data-bs-target="#profile_{{$loop->index}}" type="button" role="tab" aria-controls="profile_{{$loop->index}}" aria-selected="false"> {{ __('website_screens/homescreen.stages') }}</button>
                                      </li>
                                      <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="contact-tab_{{$loop->index}}" data-bs-toggle="tab" data-bs-target="#contact_{{$loop->index}}" type="button" role="tab" aria-controls="contact_{{$loop->index}}" aria-selected="false">{{ __('website_screens/homescreen.articles') }}</button>
                                      </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent" style="padding: 15px;text-align: center">
                                      <div class="tab-pane fade show active" id="home_{{$loop->index}}" role="tabpanel" aria-labelledby="home-tab_{{$loop->index}}" style="padding: 20px;  word-wrap: break-word;text-align:center">{{substr($profilesOffersSubscriber->profiles->person_bio, 0, 175) . '...'}}</div>
                                      <div class="tab-pane fade" id="profile_{{$loop->index}}" role="tabpanel" aria-labelledby="profile-tab_{{$loop->index}}">
                                    
                                          <div class="container">

                                              <div class="row">
                                                  @foreach ($profilesOffersSubscriber->profiles->profileEducationStages as $profileEducationStage)

                                                  @if ($loop->index < 4)
                                          
                                                  <div class="col-6" style="padding: 4px;font-size: 10px;font-weight: bold">

                                                    {{Config::get('app.locale') == 'ar' ?  $profileEducationStage->educationsStages->title_ar  : $profileEducationStage->educationsStages->title_en}}

                                           

                                          </div>
                                       
                              
                                          @else
                              ...
                                          @break
                                          @endif  
                              
                                            @endforeach        
                                          </div>
                                      </div>



                                      </div>
                                      <div class="tab-pane fade" style="overflow-wrap: break-word" id="contact_{{$loop->index}}" role="tabpanel" aria-labelledby="contact-tab_{{$loop->index}}">
                                  
                                          <div class="container">

                                              <div class="row">
                                          @foreach ($profilesOffersSubscriber->profiles->profileScientificArticles as $scientificArticle)

                                          @if ($loop->index < 6)
                                          
                                                  <div class="col-6" style="padding: 4px;font-size: 10px;font-weight: bold">

                                                    {{Config::get('app.locale') == 'ar' ? $scientificArticle->scientificArticles->title_ar  :  $scientificArticle->scientificArticles->title_en}} 

                                           

                                          </div>
                                       
                              
                                          @else
                              ...
                                          @break
                                          @endif  
                              
                                            @endforeach        
                                          </div>
                                  
                                      </div>

                                  
                                      </div>
                                    </div>
                                    




                              </div>

                  <div class="more">
                    <a href="{{URL::to('profile/'.$profilesOffersSubscriber->profiles->id)}}" class="btn more-btn" >{{Config::get('app.locale') == 'ar' ?  'المزيد' :"More"}}</a>
                  </div>
                                  </div>

                
          </div>   



            @endforeach


            @endif



              </div>

